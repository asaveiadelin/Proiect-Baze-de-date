<?php
  session_start();
  require "includes/dbh.inc.php";
  
  ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Header</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php
    if (!isset($_SESSION['utilizator_id'])) 
    {?>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container"><a class="navbar-brand logo" style="padding-left: 15px;" href="index.php"><strong>iGaming</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto" style="margin-right: -44px;">
                        <form class="form-categorii" action="index.php" method="post">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link">  <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px; margin-right:-30px;" name="home" ><b>Home</b></button></a>
                            </li>
                            </form>
                        <form class="form-categorii" action="includes/catalog.inc.php" method="post">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link">  <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px;" name="products" ><b>Products</b></button></a>
                            </li>
                        </form>
                        <form class="form-categorii" action="login.php" method="post">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link"> <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px; margin-right:-30px; " name="login" ><b>Login</b></button></a>
                            </li>
                        </form>
                        <form class="form-categorii" action="register.php" method="post">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link">  <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px; " name="register" ><b>Register</b></button></a>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
    }
    elseif (isset($_SESSION['utilizator_id'])) 
    {?>
           
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container"><a class="navbar-brand logo" style="padding-left: 15px;" href="index.php"><strong>iGaming</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto" style="margin-right: -44px;">
                        <form class="form-categorii" action="index.php" method="post">
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px; " name="home" ><b>Home</b></button>
                            </li>
                        </form>
                            <form class="form-categorii" action="includes/catalog.inc.php" method="post">
                                <li class="nav-item" role="presentation">
                                    <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px; " name="products" ><b>Products</b></button>
                                </li>
                            </form>
                        <form class="form-categorii" action="account.php" method="post">
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px; " name="account" ><b>Account</b></button>
                            </li>
                        </form>
                        <form class="form-categorii" action="includes/cart.inc.php" method="post">
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-light border-white" type="submit" name="cart" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px;" ><b>Cart</b></button>
                            </li>
                        </form>
                        <form class="form-categorii" action="includes/logout.inc.php" method="post">
                            <li class="nav-item" role="presentation">
                                <button class="btn btn-light border-white" type="submit" style="background-color: rgb(255,255,255);opacity: 0.78;filter: contrast(129%);width: 84px; font-size:18px; " name="logout-submit" ><b>Logout</b></button>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
    }
    ?>
</body>