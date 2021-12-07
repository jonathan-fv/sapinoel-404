<?php

require_once(__DIR__.'./dbconnect.php');

$salt = "6z7GKa9kpDN7KC3ICW1Hi.";

$signStatement = $pdo->prepare('SELECT * FROM `user`');
$signStatement ->execute();
$users = $signStatement->fetchAll();

if(isset($_POST['valider'])){
    if(!empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $last_name = trim(htmlspecialchars($_POST['last_name']));
        $first_name = trim(htmlspecialchars($_POST['first_name']));
        $email = trim(htmlspecialchars($_POST['email']));

        $check = $pdo->prepare('SELECT last_name, first_name, email, password FROM `user` WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){
            if(strlen($last_name) <= 100){
                if(strlen($first_name) <= 100){
                    if(strlen($email) <= 100){
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            if(strlen($password) <= 100){

                                $password = $salt.$_POST['password'].$salt;
                                $password = password_hash($password, PASSWORD_DEFAULT);

                                $sql = $pdo->prepare ("INSERT INTO `user`(last_name,first_name,email,password)
                                                        VALUES (:nom, :prenom, :email, :password)");

                                $sql->execute([
                                ':nom' => $last_name,
                                ':prenom' => $first_name,
                                ':email' => $email,
                                ':password' => $password,
                                ]);

                                header("Location: ../index.php?reg_err=success");

                            }else{
                                header('Location: ../index.php?reg_err=password');
                            }
                        }
                        else{
                            header('Location: ../index.php?reg_err=email');
                        }
                    }
                    else{
                        header('Location: ../index.php?reg_err=email_length');
                    }
                }
                else{
                    header('Location: ../index.php?reg_err=first_name_length');
                }
            }else{
                header('Location: ../index.php?reg_err=last_name_length');
            }
        }
        else{
            header('Location: ../index.php?reg_err=already');
        }
    }
    else{
        echo "Entrez tous les champs";
    }
}

?>