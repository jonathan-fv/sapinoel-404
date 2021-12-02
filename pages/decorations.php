<?php
session_start();
require_once(__DIR__.'../../functions/product.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/" type="image/x-icon">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Sapinoël - Décorations</title>
</head>
<?php require_once('../pages/header.php') ?>
<div class="container-fluid">
<div class="products-item">        
        <div class="box">
            <?php foreach ($decorations as $decorations): ?>
            <form action="../functions/manageCart.php" method="POST">
                <div class="product_sapin">
                    <img src="../<?= $decorations['product_img'] ?>">
                    <div class="description">
                        <h3><?= $decorations['product_name'] ?> <span> <?= 'H - ' . $decorations['height']. ' cm' ?></span></h3>
                        <h5>Description:</h5>
                        <p><?= $decorations['product_desc'] ?></p>
                    </div>
                    <div class="price">
                        <p><?= $decorations['product_price'].' €' ?></p>
                        <button type=submit class="btn" name="AddToCart">Ajouter au panier</button>
                        <input type="hidden" name="article" value="<?= $decorations['product_name'] ?>">
                        <input type="hidden" name="prix" value="<?= $decorations['product_price'] ?>">
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
