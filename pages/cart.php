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
    <title>Sapinoël - Mon panier</title>
</head>
<?php require_once('../pages/header.php') ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
            <h1>MES ACHATS</h1>
        </div>
        <div class="col-lg-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php 
                    $total = 0;
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key=> $value) 
                        {
                            $sr = $key+1;
                            $total = $total + $value['prix'];
                            echo "
                            <tr>
                                <td>$sr</td>
                                <td>$value[article]</td>
                                <td>$value[prix]€</td>
                                <td><input class='text-right' type='number' min='1' max='10' value=$value[quantity]> </td>
                                <td>
                                    <form action='../functions/manageCart.php' method='POST'>
                                        <button name='removeItem' class='btn'><i class='fas fa-trash-alt'></i</button></td>
                                        <input type='hidden' name='removeItem' value='$value[article]'>
                                    </form>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3">
            <div class="border bg-light rounded p-4">
                <h4>Total</h4>
                <h4 class="text-right"><?= $total ?>€</h4>
                <br>
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Payer à la livraison
                        </label>
                        <br>
                    </div>
                    <button class="btn btn-block">Commandez</button>
                </form>
            </div>
            
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
