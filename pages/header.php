<?php session_start(); ?>

<body>
    <!-- header section starts -->
    <header class="header">
        <a href="/index.php" class="logo"><i class="las la-tree"></i>Sapinoël</a>
        <nav class="navbar">
            <a href="/pages/sapins_naturels.php">Sapins Naturels</a>
            <a href="/pages/sapins_artificiels.php">Sapins Artificiels</a>
            <a href="/pages/decorations.php">Décorations</a>
            <a href="/index.php#about">Nous connaitre</a>
        </nav>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <?php
                $count = 0;
                if(isset($_SESSION['cart']))
                {
                    $count = count($_SESSION['cart']);
                }
            ?>
            <a href="../pages/cart.php">
                <div class="fas fa-shopping-cart" id="cart-btn">
                    <span class="badge badge-danger"><?= $count ?></span>
                </div>
            </a>
            <div class="fas fa-user" id="login-btn"></div>
        </div>
        <form action="" class="search-form">
            <input type="scearch" id="scearch-box" placeholder="Rechercher">
            <label for="scearch-box"></label>
            <button><i class="fas fa-search"></i></button>
        </form>
        <?php 
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case 'password':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur:</strong> Mot de passe incorrect
        </div>
        <?php
                    break;
                    case 'email':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur:</strong> Email incorrect
        </div>
        <?php
                    break;
                    case 'already':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur:</strong> Ce compte n'existe pas
        </div>
        <?php
                    break;
                }
            }
        ?>
        <form action="functions/connexion.php" class="login-form" metho="POST">
            <h3>Se connecter</h3>
            <input type="email" placeholder="Votre mail" class="box">
            <input type="password" placeholder="Votre mot de passe" class="box">
            <p>Mot de passe oublié <a href="#">Cliquez ici !</a></p>
            <p>Vous n'avez pas de compte <span id="subscribe-link">Créér un compte</span></p>
            <input type="submit" value="Se connecter" class="btn">
        </form>
        <?php 
            if(isset($_GET['reg_err'])){

                $err = htmlspecialchars($_GET['reg_err']);

                switch($err)
                {
                    case 'password':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur:</strong> Mot de passe trop long
        </div>
        <?php
                    break;
                    case 'email':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur:</strong> Email trop long
        </div>
        <?php
                    break;
                    case 'success':
                        ?>
        <div class="alert alert-success">
            <strong>Succes:</strong> Inscription réussie
        </div>
        <?php
                    break;
                    case 'already':
                        ?>
        <div class="alert alert-success">
            <strong>Succes:</strong> Ce compte existe déja
        </div>
        <?php
                    break;
                }
            }
        ?>
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
            <p>La <span> magie de Noël</span> <br>commence par un sapin...</p>
        </div>
    </section>
    <!-- home section ends -->