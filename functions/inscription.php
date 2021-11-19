<?php

require_once("./dbconnect.php");
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

        $password = $salt.$_POST['password'].$salt;
        $password = hash('sha256', $password);
        
        $sql = $pdo->prepare ("INSERT INTO `user`(last_name,first_name,email,password)
                VALUES (:nom, :prenom, :email, :password)");
        
        $sql->execute([
            ':nom' => $last_name,
            ':prenom' => $first_name,
            ':email' => $email,
            ':password' => $password,
        ]);

        //header("Location: ./index.php");
    }
    else{
        echo "entrez tous les champs";
    }
}

?>