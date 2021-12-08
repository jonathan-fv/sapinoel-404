<?php
session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['AddToCart'])){
            if(isset($_SESSION['cart']))
            {
                $myitems = array_column($_SESSION['cart'], 'article');
                if(in_array($_POST['article'], $myitems)){
                    echo "
                    <script>
                        alert('Article déjà présent dans votre panier')
                        window.location.href='javascript:history.back()'
                    </script>";
                }
                else{
                    $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('article' => $_POST['article'], 'prix' => $_POST['prix'], 'quantity' => 1);
                echo "
                    <script>
                        alert('Article aujouté')
                        window.location.href='javascript:history.back()'
                    </script>";
                }
            }
            else{
                $_SESSION['cart'][0] = array('article' => $_POST['article'], 'prix' => $_POST['prix'], 'quantity' => 1);
                echo "
                    <script>
                        alert('Article aujouté')
                        window.location.href='javascript:history.back()'
                    </script>";
            }
        }
        if(isset($_POST['removeItem']))
        {
            foreach($_SESSION['cart'] as $key => $value)
            {
                if($value['article']==$_POST['removeItem'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "
                        <script>
                            alert('L\'article à bien été supprimé')
                            window.location.href='javascript:history.back()'
                        </script>
                    ";
                }
            }
        }
    }