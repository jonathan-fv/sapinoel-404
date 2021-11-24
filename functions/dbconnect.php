<?php
    session_start();
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=sapinoel;charset=utf8','root','');
    }
    catch(Exception $e)
    {
        die('Erreur: ' . $e->getMessage());
    }

    $pdo;
?>