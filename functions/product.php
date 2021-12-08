<?php

require_once(__DIR__.'./dbconnect.php');

$naturalFirStatement = $pdo->prepare('SELECT * FROM `product` WHERE category="Sapins naturels"');
$naturalFirStatement ->execute();
$naturalFirs = $naturalFirStatement->fetchAll();


$artificialFirStatement = $pdo->prepare('SELECT * FROM `product` WHERE category="Sapins artificiels"');
$artificialFirStatement ->execute();
$artificialFirs = $artificialFirStatement->fetchAll();


$decorationStatement = $pdo->prepare('SELECT * FROM `product` WHERE category="Décorations"');
$decorationStatement ->execute();
$decorations = $decorationStatement->fetchAll();

?>