<!DOCTYPE html>
<html lang="fr">

<?php
    require_once(__DIR__.'/functions/dbconnect.php');
    require_once(__DIR__.'/functions/product.php');
    require_once('./pages/header.php'); 
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
                        <div class="price"><?= $naturalFir['product_price'] . ",00€" ?></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Voir l'article</a>
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
                        <div class="price"><?= $artificialFir['product_price'] . ",00€" ?></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Voir l'article</a>
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
                        <div class="price"><?= $decoration['product_price'] . ",00€" ?></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">Voir l'article</a>
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
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum minus unde quam est! Consequatur sapiente, nesciunt soluta, delectus facere qui quis adipisci molestias rem incidunt repellat esse at facilis doloribus. </p>
            </div>
            <div class="box">
                <img src="./img/our2.jpg" alt="our2">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum minus unde quam est! Consequatur sapiente, nesciunt soluta, delectus facere qui quis adipisci molestias rem incidunt repellat esse at facilis doloribus. </p>
            </div>
            <div class="box">
                <img src="./img/our3.jpg" alt="our3">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum minus unde quam est! Consequatur sapiente, nesciunt soluta, delectus facere qui quis adipisci molestias rem incidunt repellat esse at facilis doloribus. </p>
            </div>
        </div>
    </section>
    <!-- ours section ends -->
    <!-- footer section starts -->
    <footer>
        <?php require_once("./pages/footer.php"); ?>
    </footer>
    <!-- footer section ends -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"> </script>
    <script src="./js/app.js"></script>
</body>
</html>