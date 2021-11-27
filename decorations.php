<?php
require_once('./functions/product.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php require("./pages/header.php") ?>
<style href="./styles.css"></style>
<div class="products">        
        <div class="box">
            <?php foreach ($decorations as $decoration) : ?>  
            <div class="product_sapin">
                <img src="./<?= $decoration['product_img'] ?>">
                <div class="description">
                    <h3><?= $decoration['product_name'] ?></h3>
                    <h5>Description :</h5>
                    <p><?= $decoration['product_desc'] ?></p>
                    <h5 style="margin-top: 1.5rem">Taille : </h5>
                    <p class="product_height"><?= $decoration['height']. ' cm' ?></p>
                </div>
                <div class="price">
                    <p><?= $decoration['product_price'].' €' ?></p>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>               
            </div>
            <?php endforeach; ?>
        </div> 
</div>
<footer>
    <?php require_once("./pages/footer.php")?>
</footer>