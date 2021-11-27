<?php
require_once('./functions/product.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php require("./pages/header.php") ?>
<style href="./styles.css"></style>
<div class="products">        
        <div class="box">
            <?php foreach ($naturalFirs as $naturalFir) : ?>  
            <div class="product_sapin">
                <img src="./<?= $naturalFir['product_img'] ?>">
                <div class="description">
                    <h3><?= $naturalFir['product_name'] ?> <span> <?= 'H - ' . $naturalFir['height']. ' cm' ?></span></h3>
                    <h5>Description:</h5>
                    <p><?= $naturalFir['product_desc'] ?></p>
                    <!-- <h5>Taille</h5>
                    <p class="product_height">//<?= $naturalFir['height']. ' cm' ?></p> -->
                </div>
                <div class="price">
                    <p><?= $naturalFir['product_price'].' €' ?></p>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>               
            </div>
            <?php endforeach; ?>
        </div> 
</div>
<footer>
    <?php require_once("./pages/footer.php")?>
</footer>