<!DOCTYPE html>
<html lang="fr">
<<<<<<< HEAD:index.html
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/" type="image/x-icon">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/styles.css">
    <title>Sapinoël</title>
</head>
<body>
    <!-- header section starts -->
    <header class="header">
        <a href="#" class="logo"><i class="las la-tree"></i>Sapinoël</a>
        <nav class="navbar">
            <a href="#">Nos Sapins</a>
            <a href="#">Nos Décorations</a>
            <a href="#">Catalogue</a>
            <a href="#about">Nous connaitre</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
        <form action="" class="search-form">
            <input type="scearch" id="scearch-box" placeholder="Rechercher">
            <label for="scearch-box" class="fas fa-search"></label>
        </form>
        <div class="shopping-cart">
            <h4>Mon panier</h4>
            <div class="box">
                <i class="fas fa-trash-alt"></i>
                <img src="./img/sapin1.png" alt="sapin">
                <div class="content">
                    <h3>Sapin 1</h3>
                    <span class="price">29,99€</span>
                    <span class="quantity">Qté : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash-alt"></i>
                <img src="./img/sapin1.png" alt="sapin">
                <div class="content">
                    <h3>Sapin 2</h3>
                    <span class="price">49,99€</span>
                    <span class="quantity">Qté : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash-alt"></i>
                <img src="./img/sapin1.png" alt="sapin">
                <div class="content">
                    <h3>Sapin 3</h3>
                    <span class="price">69,99€</span>
                    <span class="quantity">Qté : 1</span>
                </div>
            </div>
            <div class="total">Total : 149,97€</div>
            <a href="#" class="btn">Commander</a>
        </div>
        <form action="" class="login-form">
            <h3>Se connecter</h3>
            <input type="email" placeholder="Votre mail" class="box">
            <input type="password" placeholder="Votre mot de passe" class="box">
            <p>Mot de passe oublié <a href="#">Cliquez ici !</a></p>
            <p>Vous n'avez pas de compte  <span id= "subscribe-link">Créér un compte</span></p>
            <input type="submit" value="Se connecter" class="btn">
        </form>
        <form action="" class="subscribe-form" id="subscribe-link">
            <h3>S'incrire</h3>
            <input type="text" placeholder="Votre pseudo" class="box">
            <input type="email" placeholder="Votre mail" class="box">
            <input type="password" placeholder="Votre mot de passe" class="box">
            <input type="password" placeholder="Confirmez votre mot de passe" class="box">
            <p>Mot de passe oublié <a href="#">Cliquez ici !</a></p>
            <input type="submit" value="S'incrire" class="btn">
        </form>
    </header>
    <!-- header section ends -->
    <!-- home section starts -->
    <section class="home"> 
        <div class="content">
            <h1>Sapinoël</h1>
            <p>La <span> magie de Noël</span> commence par un sapin</p>
            <a href="#" class="btn">Notre catalogue</a>
        </div>
    </section>
    <!-- home section ends -->
=======
<?php require_once("./pages/header.php") ?>

>>>>>>> 3731129371af52a95261d09ed5d7e0d1ea9646db:index.php
    <!-- products section starts -->
    <section class="products">
        <h2 class="heading"><span>Nos</span> Sapins</h2>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="./img/new1.jpg" alt="new1">
                    <h3>Sapin 1</h3>
                    <div class="price">29,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
                <div class="swiper-slide box">
                    <img src="./img/new1.jpg" alt="new2">
                    <h3>Sapin 2</h3>
                    <div class="price">49,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
                <div class="swiper-slide box">
                    <img src="./img/new1.jpg" alt="new3">
                    <h3>Sapin 3</h3>
                    <div class="price">69,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
                <div class="swiper-slide box">
                    <img src="./img/new1.jpg" alt="new1">
                    <h3>Sapin 4</h3>
                    <div class="price">29,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
                <div class="swiper-slide box">
                    <img src="./img/new1.jpg" alt="new2">
                    <h3>Sapin 5</h3>
                    <div class="price">49,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
                <div class="swiper-slide box">
                    <img src="./img/new1.jpg" alt="new3">
                    <h3>Sapin 6</h3>
                    <div class="price">69,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
        </div>
    </section>
    <!-- decoration section starts -->
    <section class="products">
        <h2 class="heading"><span>Nos</span> Décorations</h2>
        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="./img/deco1.jpg" alt="new1">
                    <h3>Déco 1</h3>
                    <div class="price">2,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
                <div class="swiper-slide box">
                    <img src="./img/deco2.jpg" alt="new2">
                    <h3>Déco 2</h3>
                    <div class="price">3,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
                <div class="swiper-slide box">
                    <img src="./img/deco3.jpg" alt="new3">
                    <h3>Déco 3</h3>
                    <div class="price">4,99€</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">Ajouter au panier</a>
                </div>
            </div>
        </div>
    </section>
    <!-- decoration section ends -->
    <!-- categorie section starts -->
    <section class="categorie">
        <h2 class="heading"><span>Nos</span> Catégories</h2>
        <div class="box-container">
            <div class="box">
                <img src="./img/placeholder.jpg" alt="image">
                <h3>Sapins naturels</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="btn">Voir plus</a>
            </div>
            <div class="box">
                <img src="./img/placeholder.jpg" alt="image">
                <h3>Sapins Articiels</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="btn">Voir plus</a>
            </div>
            <div class="box">
                <img src="./img/placeholder.jpg" alt="image">
                <h3>Décorations</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <a href="#" class="btn">Voir plus</a>
            </div>
        </div>
    </section>
    <!-- categorie section ends -->
    <!-- products section ends -->
    <!-- ours section starts -->
    <section class="ours" id="about">
        <h2 class="heading"><span>Nous</span> Connaitre</h2>
        <div class="box-container">
            <div class="box">
                <img src="./img/our11.jpg" alt="our1">
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
        <?php require_once("./pages/footer.php")?>
    </footer>
    <!-- footer section ends -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"> </script>
    <script src="./js/app.js"></script>
</body>
</html>