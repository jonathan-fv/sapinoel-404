<?php
require_once('./functions/product.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php require("./pages/header.php") ?>
<style href="./styles.css"></style>
<div class="products">        
        <div class="box">
            <?php foreach ($artificialFirs as $artificialFir) : ?>  
            <div class="product_sapin">
                <img src="./<?= $artificialFir['product_img'] ?>">
                <div class="description">
                    <h3><?= $artificialFir['product_name'] ?> <span> <?= 'H - ' . $artificialFir['height']. ' cm' ?></span></h3>
                    <h5>Description:</h5>
                    <p><?= $artificialFir['product_desc'] ?></p>
                    <!-- <h5>Taille</h5>
                    <p class="product_height">//<?= $artificialFir['height']. ' cm' ?></p> -->
                </div>
                <div class="price">
                    <p><?= $artificialFir['product_price'].' €' ?></p>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>               
            </div>
            <?php endforeach; ?>
        </div> 
</div>
<footer>
    <?php require_once("./pages/footer.php")?>
</footer>