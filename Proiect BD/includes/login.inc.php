<?php
if (isset($_POST['login-submit'])) 
{

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    if (empty($mailuid) || empty($password)) 
    {
        header("Location: ../index.php?error=emptyfields&mailuid=".$mailuid);
        exit();
    }
    else 
    {
        $sql = "SELECT * FROM users WHERE user_name=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) 
        {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else 
        {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) 
            {
                if($password ==$row['pwd'])
                {
                    $pwdCheck=true;
                }
                else{
                    $pwdCheck=false;
                }
                if ($pwdCheck == false) 
                {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true) 
                {
                    session_start();
                   
                    $_SESSION['utilizator_id'] = $row['user_id'];
                    $_SESSION['utilizator_username'] = $row['user_name'];
                    $_SESSION['utilizator_email'] = $row['email'];
                    $w=(int)$_SESSION['utilizator_id'];
                    $sql = "SELECT * FROM users_details where user_id=$w;"; 
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0)
                    {
                        
                            $row = mysqli_fetch_assoc($result);
                            $_SESSION['utilizator_lastname'] = $row['last_name'];
                            $_SESSION['utilizator_firstname'] = $row['first_name'];
                            $_SESSION['utilizator_address'] = $row['address'];
                            $_SESSION['utilizator_phone'] = $row['phone'];
                            header("Location: ../index.php");
                            exit();
                    }
                    
                }
            }
        }
    }
    $sql = "SELECT * FROM category;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        $_SESSION['numar_categorii']=mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result)) 
        {
            $_SESSION['category_id'][] = $row['category_id'];
            $_SESSION['category_name'][] = $row['category_name'];
            }
        }
        $x=(int)$_SESSION['category_id'][0];
        $sql = "SELECT * FROM products, category where products.category_id=category.category_id and category.category_id=$x;";
        $result = mysqli_query($conn, $sql);
        $_SESSION['numar_produse']=mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0)
        {  
            for($j=0;$j<$_SESSION['numar_produse'];$j++)
            {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['category_id'][] = $row['category_id'];
                $_SESSION['category_name'][] = $row['category_name'];
            }      
        }
        $w=(int)$_SESSION['user_id'];
        $sql = "SELECT products.product_name FROM cart, products where cart.user_id=$w and cart.product_id=products.product_id;";
        $result = mysqli_query($conn, $sql);
        $_SESSION['numar_produse_din_cos']=mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0)
        {
        for($j=0;$j<$_SESSION['numar_produse_din_cos'];$j++)
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['id_produs_din_cos'][$j] = $row['product_id'];
            $_SESSION['nume_produs_din_cos'][$j] = $row['product_name'];
        }      
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: ../index.php");
    exit();
    
}
else 
{
    header("Location: ../register.php");
    exit();
}

