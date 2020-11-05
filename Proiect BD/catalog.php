<?php
  require "header.php";
 
  ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md d-xl-flex navigation-clean" style="margin: auto;margin-top: 91px;background-color: rgba(27,190,242,0);width: 1199px;padding: 15px;">
            <div class="container"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-xl-flex align-content-center"id="navcol-1" style="margin: auto; margin-top:20px;">
                    <ul class="nav navbar-nav d-xl-flex ml-auto" style="margin:AUTO;">
                        <form  action="includes/meniu.inc.php" method="POST">
                                        <?php
                                            for($i=0;$i<$_SESSION['numar_categorii'];$i++)
                                            { 
                                                echo '<button class="btn btn-light border-white" type="submit" style="background-color:rgba(242,242,242,0.07);opacity: 0.78; border:none;width: 84px; font-size:18px; margin-right:20px; " name="buton_categorie['.$i.']" ><b>' . htmlspecialchars($_SESSION['category_name'][$i]) . '</b></button>';
                                            }
                                        
                                        ?>
                            </form>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark" style="margin-top: -129px;">
            <div class="container">
                <div class="block-heading"></div>
                <div class="col-md-3">
                    <div class="d-none d-md-block">
                        <div class="filters"></div>
                    </div>
                    <div class="d-md-none"><a class="btn btn-link d-md-none filter-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="filters" role="button" href="#filters">Filters<i class="icon-arrow-down filter-caret"></i></a>
                        <div class="collapse" id="filters">
                            <div class="filters"></div>
                        </div>
                    </div>
                </div>
                <div class="content" style="width:900px; margin:auto;">
                    <div class="row d-xl-flex justify-content-xl-center" style="margin-top: -3px;">
                        <div class="col-md-9">
                            <div class="products" style="padding-left: 0px;margin:auto;">
                                <div class="row no-gutters" style="margin-left:25px;">
                                <?php
                                for($i=0;$i<$_SESSION['numar_produse'];$i++)
                                {
                                    echo'<div class="col-12 col-md-6 col-lg-4" style="margin-right:100px;">
                                            <div class="clean-product-item" style="background-color: #f1f1f1; height:430px; width:280px;">
                                            <div class="image"><img class="img-fluid d-block mx-auto" src="assets/img/products/'.htmlspecialchars($_SESSION['product_image'][$i]).'" style="margin-bottom: 39px;"></div>
                                            <div class="product_name"><h4 class="text" style="margin-bottom: 15px; font-size:20px; color:#100909;">'.htmlspecialchars($_SESSION['product_name'][$i]).'</h4></div>
                                            <div class="product_describe"><h4 class="text" style="margin-bottom: 30px; font-size:15px; color:#100909;">'.htmlspecialchars( $_SESSION['product_describe'][$i]).'</h4></div>
                                            <div class="about">';
                                            if (isset($_SESSION['utilizator_id']))
                                            {
                                                 echo'<form action="includes/products_cart.inc.php" method="post">
                                                        <button class="add" type="submit" name="buton_add_produs['.$i.']">ADD</button>
                                                      </form>';
                                                    
                                            }
                                                echo'<div class="price" >
                                                        <h4 class="text-price" style=" margin-top:5px;color:red;">'.htmlspecialchars($_SESSION['product_price'][$i]).' Ron</h4>
                                                </div>
                                            </div>
                                        </div>
                                        </div>';
                                }?>
                                </div>
                            </div>
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