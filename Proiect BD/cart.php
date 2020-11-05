<?php
  require "header.php";
  ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shopping Cart - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark" style="height: 1080px;">
            <div class="container"style="margin-top:60px;">
                <div class="block-heading">
                    <h2 class="text">Shopping Cart</h2>
                </div>
                <div class="content"style="width: 1230px;margin-top:80px;">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center"style="margin-bottom: 21px;">
                                    
                                    <?php
                                        for($i=0;$i<$_SESSION['numar_produse_din_cos'];$i++)
                                        {
                                            echo'<div class="col-md-3">
                                                        <div class="product-image"style="margin-bottom: 21px;">
                                                        <img class="img-fluid d-block mx-auto" src="assets/img/products/'.htmlspecialchars($_SESSION['imagine_produs_din_cos'][$i]).'" style="margin-bottom: 39px;">
                                                        </div>
                                                </div>';
                                            echo'<div class="col-md-5 product-info">
                                                    <div class="product_name"><h4 class="text1" style="margin-bottom: 30px;">'.htmlspecialchars( $_SESSION['nume_produs_din_cos'][$i]).'</h4></div>
                                                    <div class="product-specs">
                                                        <div class="product_describe"><h4 class="textcos" style="font-size:15px;">'.htmlspecialchars(  $_SESSION['descriere_produs_din_cos'][$i]).'</h4></div>
                                                    </div>
                                                </div>';
                                            
                                            echo '<div class="col-6 col-md-2 price">
                                                    <div class="price">
                                                        <h4 class="textprice" style="margin-left:20px; font-size:12px;">'.htmlspecialchars( $_SESSION['valoare_produs_din_cos'][$i]).' Ron</h4>
                                                    </div>
                                                </div>';
                                            echo '<form action="includes/cart.inc.php" method="post"><button type="submit" name="buton_sterge_produs_cos['.$i.']" >X</button></form> ';
                                        } 
                                     ?>
                                     </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <?php
                                echo'<form action="includes/cart.inc.php" method="post">
                                <h4><span class="text">Total</span><span class="price">'.htmlspecialchars( $_SESSION['total']).'</span></h4><button class="btn btn-primary btn-block btn-lg" type="button">Checkout</button></div></form>';
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>