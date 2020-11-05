<?php

    session_write_close(); 
    session_start();

    if (isset($_POST['cart'] ))
    {
        $w=(int)$_SESSION['utilizator_id'];
        require 'dbh.inc.php';
        $sql = "SELECT products.product_id, products.product_name,products.product_price,products.product_describe,products.product_image FROM cart, products where cart.user_id=$w and cart.product_id=products.product_id;";
        $result = mysqli_query($conn, $sql);
        $_SESSION['numar_produse_din_cos']=mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0)
        {
            for($j=0;$j<$_SESSION['numar_produse_din_cos'];$j++)
            {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['id_produs_din_cos'][$j] = $row['product_id'];
                $_SESSION['nume_produs_din_cos'][$j] = $row['product_name'];
                $_SESSION['valoare_produs_din_cos'][$j] = $row['product_price'];
                $_SESSION['descriere_produs_din_cos'][$j] = $row['product_describe'];
                $_SESSION['imagine_produs_din_cos'][$j] = $row['product_image'];
            }      
        }
    }
    $w=(int)$_SESSION['utilizator_id'];
    $sql="SELECT sum(product_price) total FROM products where product_id in(select product_id from cart where user_id=$w);";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['total'] = $row['total'];    
    }
    

    $w=(int)$_SESSION['utilizator_id'];
    for($i=0;$i<$_SESSION['numar_produse_din_cos'];$i++)
    {
        if (isset($_POST['buton_sterge_produs_cos'][$i] ))
        {
            require 'dbh.inc.php';
            $z=(int)$_SESSION['id_produs_din_cos'][$i];
            $sql = "DELETE from cart where product_id=$z and user_id = $w;";
            mysqli_query($conn, $sql);
        }
    }



    $w=(int)$_SESSION['utilizator_id'];
    require 'dbh.inc.php';
    $sql = "SELECT products.product_id, products.product_name,products.product_price,products.product_describe,products.product_image FROM cart, products where cart.user_id=$w and cart.product_id=products.product_id;";
    $result = mysqli_query($conn, $sql);
    $_SESSION['numar_produse_din_cos']=mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0)
    {
    for($j=0;$j<$_SESSION['numar_produse_din_cos'];$j++)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_produs_din_cos'][$j] = $row['product_id'];
        $_SESSION['nume_produs_din_cos'][$j] = $row['product_name'];
        $_SESSION['valoare_produs_din_cos'][$j] = $row['product_price'];
        $_SESSION['descriere_produs_din_cos'][$j] = $row['product_describe'];
        $_SESSION['imagine_produs_din_cos'][$j] = $row['product_image'];        }      
    }

    $w=(int)$_SESSION['utilizator_id'];
    $sql="SELECT sum(product_price) total FROM products where product_id in(select product_id from cart where user_id=$w);";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['total'] = $row['total'];    
    }
    
    header("Location: ../cart.php");
    exit();
?>