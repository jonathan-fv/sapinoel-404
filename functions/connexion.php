<?php
session_start();
require_once(__DIR__.'./dbconnect.php');

    if(isset($_POST['email']) && isset($_POST['password'])){
        
        $email = trim(htmlspecialchars($_POST['email']));
        $password = trim(htmlspecialchars($_POST['password']));

        $check = $pdo->prepare('SELECT email, password FROM `user` WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1 ){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                $password = $salt.$_POST['password'].$salt;
                $password = password_hash($password, PASSWORD_BCRYPT);

                if($data['password'] === $password){
                    $_SESSION['user'] = $data['pseudo'];
                    header('Location: ../index.php');
                }
                else{
                    header('Location: ../index.php?login_err=password');
                }
            }
            else{
                header('Location: ../index.php?login_err=email');
            }
        }
        else{
            header('Location: ../index.php?login_err=already');
        }

    }
    else{
        header('Location: ../index.php');
    }