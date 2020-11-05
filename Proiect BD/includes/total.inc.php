<?php

    session_write_close(); 
    session_start();
 
    require 'dbh.inc.php';
    $w=(int)$_SESSION['utilizator_id'];
    $sql="SELECT sum(product_price) total FROM products where product_id in(select product_id from cart where user_id=$w);";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['total'] = $row['total'];    
    }
?>
    
            

