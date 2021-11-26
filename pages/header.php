
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
    <a href="index.php" class="logo"><i class="las la-tree"></i>Sapinoël</a>
        <nav class="navbar">
            <a href="../pages/sapins_naturels.php">Sapins Naturels</a>
            <a href="../pages/sapins_artificiels.php">Sapins Artificiels</a>
            <a href="../pages/decorations.php">Décorations</a>
            <a href="index.php#about">Nous connaitre</a>
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
        <form action="" class="login-form" metho="POST">
            <h3>Se connecter</h3>
            <input type="email" placeholder="Votre mail" class="box">
            <input type="password" placeholder="Votre mot de passe" class="box">
            <p>Mot de passe oublié <a href="#">Cliquez ici !</a></p>
            <p>Vous n'avez pas de compte  <span id= "subscribe-link">Créér un compte</span></p>
            <input type="submit" value="Se connecter" class="btn">
        </form>
        <form action="functions/inscription.php" class="subscribe-form" id="subscribe-link" method="POST">
            <h3>S'incrire</h3>
            <input type="text" placeholder="Votre Nom" class="box" name="first_name" required minlength="2">
            <input type="text" placeholder="Votre Prénom" class="box" name="last_name" required minlength="2">
            <input type="email" placeholder="Votre mail" class="box" name="email" required minlength="4">
            <input type="password" placeholder="Votre mot de passe" class="box" name="password" required minlength="4">
            <p>Mot de passe oublié <a href="#">Cliquez ici !</a></p>
            <input type="submit" value="S'incrire" class="btn" name="valider">
        </form>
    </header>
    <!-- header section ends -->
    <!-- home section starts -->
    <section class="home"> 
        <div class="content">
            <h1>Sapinoël</h1>
            <p>La <span> magie de Noël</span> commence par un sapin</p>
        </div>
    </section>
    <!-- home section ends -->