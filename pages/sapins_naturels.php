<?php
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Sapinoël</title>
</head>
<?php require_once('../pages/header.php') ?>
    <section class="products">
        <h2 class="heading"><span>Nos</span> Sapins naturels</h2>
        <div class="product-slider">
            <?php foreach ($naturalFirs as $naturalFir) : ?>
                <div class="swiper-slide box">
                    <img src="../<?= $naturalFir['product_img'] ?>" alt="<?= $naturalFir['product_name'] ?>">
                    <h3><?= $naturalFir['product_name'] ?></h3>
                    <div>
                        <h5>Decription:</h5>
                        <p class="desc"><?= $naturalFir['product_desc'] ?></p>
                        <hr>
                        <h5>Taille:</h5>
                        <p class=height><?= $naturalFir['height'] . "cm" ?></p>
                        <hr>
                    </div>
                    <div class="price"><?= $naturalFir['product_price'] . " €" ?></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<footer>
    <?php require_once("../pages/footer.php"); ?>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/app.js"></script>  
</body>
</html>
