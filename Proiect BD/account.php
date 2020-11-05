<?php
  require "header.php";
  ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Account</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main class="page register-page">
        <section class="clean-block clean-form dark" style="height: 1090px;"><div class="container" style="padding-top: 10px; margin-top:-60px">
            <div class="block-heading">
                <h2 class="text">Account</h2>
            </div>
                <form action="includes/account.inc.php" method="POST" style="padding-top: 29px;">  <!-- Campurile pentru register-->
                <?php
                        if (isset($_GET["error"])) 
                        {
                            if ($_GET["error"] == "empty_fields") 
                            {
                            echo '<p style="margin-left:130px;color:red;font-size:20px" class="signup_error">Fill in all fields!</p>';
                            } 
                            if ($_GET["error"] == "invalid_lastname_firstname") 
                            {
                            echo '<p style="margin-left:60px;color:red;font-size:20px" class="signup_error">Invalid lastname or firstname!</p>';
                            }
                            else if ($_GET["error"] == "invalid_username") 
                            {
                            echo '<p style="margin-left:130px;color:red;font-size:20px" class="signup_error">Invalid username</p>';
                            }
                        }
                        else if (isset($_GET["save"])) 
                        {
                            if ($_GET["save"] == "success")
                            {
                            echo '<p style="margin-left:30px;color:#19df0a;font-size:20px" class="signup_success">Registration completed Successfully!</p>';
                            }
                    }
	                ?>
                    <div class="form-group"><label for="lastname">Last Name</label><input type="text" class="form-control item" name="lastname" value="<?php echo $_SESSION['utilizator_lastname'];?>"/></div>
                    <div class="form-group"><label for="firstname">First Name</label><input type="text" class="form-control item" name="firstname"  value="<?php echo $_SESSION['utilizator_firstname'];?>"/></div>
                    <div class="form-group"><label for="username">Username</label><input type="text" class="form-control item" name="username" value="<?php echo $_SESSION['utilizator_username'];?>" /></div>
                    <div class="form-group"><label for="email">Email</label><input type="email" class="border rounded shadow-none form-control item" name="email"  value="<?php echo $_SESSION['utilizator_email'];?>"/></div>
                    <div class="form-group"><label for="address">Address</label><input type="text" class="form-control item" name="address"  value="<?php echo $_SESSION['utilizator_address'];?>" /></div>
                    <div class="form-group"><label for="phone">Phone Number</label><input type="text" class="form-control item" name="phone" value="<?php echo $_SESSION['utilizator_phone'];?>"/></div>
                    <button class="btn btn-block" type="submit"  name="save-submit">Save </button>    
                   
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