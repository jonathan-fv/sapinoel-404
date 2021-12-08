<?php

require_once(__DIR__.'../../functions/product.php');
require_once('./header.php') ;
?>

<div class="container-fluid">
    <div class="products-item">        
        <div class="box">
            <?php foreach ($naturalFirs as $naturalFir) : ?>
            <form action="../functions/manageCart.php" method="POST">
                <div class="product_sapin">
                    <img src="../<?= $naturalFir['product_img'] ?>">
                    <div class="description">
                        <h3><?= $naturalFir['product_name'] ?> <span> <?= 'H - ' . $naturalFir['height']. ' cm' ?></span></h3>
                        <h5>Description:</h5>
                        <p><?= $naturalFir['product_desc'] ?></p>
                    </div>
                    <div class="price">
                        <p><?= $naturalFir['product_price'].' €' ?></p>
                        <button type=submit class="btn" name="AddToCart">Ajouter au panier</button>
                        <input type="hidden" name="article" value="<?= $naturalFir['product_name'] ?>">
                        <input type="hidden" name="prix" value="<?= $naturalFir['product_price'] ?>">
                    </div>               
                </div>
            </form>
            <?php endforeach; ?>
        </div> 
    </div>
</div>

<footer>
    <?php require_once("../pages/footer.php"); ?>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/app.js"></script>  
</body>
</html>
