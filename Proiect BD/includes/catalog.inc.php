<?php
if (isset($_POST['products'])) 
{
    require 'dbh.inc.php';
    session_start();
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
            $_SESSION['product_id'][$j] = $row['product_id'];
            $_SESSION['product_name'][$j] = $row['product_name'];
            $_SESSION['product_price'][$j] = $row['product_price'];
            $_SESSION['product_describe'][$j] = $row['product_describe'];
            $_SESSION['product_image'][$j] = $row['product_image'];
        }      
    }
    header("Location: ../catalog.php?succes");
    exit();
}


