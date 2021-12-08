<?php

require_once(__DIR__.'../../functions/product.php');
require_once('./header.php');
 ?>
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
                    <button class="btn btn-block">Commander</button>
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
