<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=sapinoel;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    catch(Exception $e)
    {
        die('Erreur: ' . $e->getMessage());
    }

    $pdo;
?>