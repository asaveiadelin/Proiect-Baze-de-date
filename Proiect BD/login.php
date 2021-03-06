<?php
  require "header.php";
  ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="page login-page">
        <section class="clean-block clean-form dark" style="height: 642px;">
            <div class="container" style="padding-top: 12px; margin-top:90px;">
                <div class="block-heading">
                    <h2 class="text">Log In</h2>
                </div>
                <form  action="includes/login.inc.php" method="POST" style="padding-top: 29px;">
                    <div class="form-group"><label for="mailuid">Username/Email</label><input type="text" class="form-control item" name="mailuid" /></div>
                    <div class="form-group"><label for="pwd">Password</label><input type="password" class="border rounded shadow-none form-control item" name="pwd" /></div>
                    <button class="btn btn-block" type="submit" name="login-submit">Log In</button>
                </form>
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