<?php
    require_once("./functions/product.php");
    require_once('./pages/header.php') 
?>

    <!-- products section starts -->
    <section class="products">
        <h2 class="heading"><span>Nos</span> Sapins naturels</h2>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <?php foreach ($naturalFirs as $naturalFir) : ?>
                    <div class="swiper-slide box">
                        <img src="<?= $naturalFir['product_img'] ?>" alt="<?= $naturalFir['product_name'] ?>">
                        <h3><?= $naturalFir['product_name'] ?></h3>
                        <div class="price"><?= $naturalFir['product_price'] . " €" ?></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="./pages/sapins_naturels.php" class="btn">Voir d'autres articles</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="products">
        <h2 class="heading"><span>Nos</span> Sapins artificiels</h2>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <?php foreach ($artificialFirs as $artificialFir) : ?>
                    <div class="swiper-slide box">
                        <img src="<?= $artificialFir['product_img'] ?>" alt="<?= $artificialFir['product_name'] ?>">
                        <h3><?= $artificialFir['product_name'] ?></h3>
                        <div class="price"><?= $artificialFir['product_price'] . " €" ?></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="./pages/sapins_artificiels.php" class="btn">Voir d'autres articles</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- decoration section starts -->
    <section class="products">
        <h2 class="heading"><span>Nos</span> Décorations</h2>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <?php foreach ($decorations as $decoration) : ?>
                    <div class="swiper-slide box">
                        <img src="<?= $decoration['product_img'] ?>" alt="<?= $decoration['product_name'] ?>">
                        <h3><?= $decoration['product_name'] ?></h3>
                        <div class="price"><?= $decoration['product_price'] . " €" ?></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="./pages/decorations.php" class="btn">Voir d'autres articles</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- decoration section ends -->
    <!-- products section ends -->
    <!-- ours section starts -->
    <section class="ours" id="about">
        <h2 class="heading"><span>Nous</span> Connaître</h2>
        <div class="box-container">
            <div class="box">
                <img src="./img/our1.jpg" alt="our1">
                <h3>EXPÉRIENCE</h3>
                <p>Nous sommes en activité depuis plusieurs jours. </p>
            </div>
            <div class="box">
                <img src="./img/our2.jpg" alt="our2">
                <h3>SAVOIR-FAIRE</h3>
                <p>Nous vous garantissons un service de qualité. </p>
            </div>
            <div class="box">
                <img src="./img/our3.jpg" alt="our3">
                <h3>SAPINS VARIÉS</h3>
                <p>Nous vous proposons différentes variétés de sapins. </p>
            </div>
            <div class="box">
                <img src="./img/our4.jpg" alt="our4">
                <h3>LIVRAISON</h3>
                <p>Nous assurons la livraison dans tout le Calvados. </p>
            </div>
        </div>
    </section>
    <!-- ours section ends -->
    <!-- footer section starts -->
    <footer>
        <?php require_once("./pages/footer.php"); ?>
    </footer>
    <!-- footer section ends -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"> </script>
    <script src="./js/app.js"></script>
</body>
</html>