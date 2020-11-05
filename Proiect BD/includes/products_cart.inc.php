<?php

    session_write_close(); 
    session_start();

    for($i=0;$i<$_SESSION['numar_produse'];$i++)
    {
        if (isset($_POST['buton_add_produs'][$i] ))
        {
            $w=(int)$_SESSION['utilizator_id'];
            $y=(int)$_SESSION['product_id'][$i];
            require 'dbh.inc.php';
           
            $sql = "INSERT INTO cart (product_id,user_id) VALUES($y,$w);";
            if (!$conn) 
            {
				      "Connection failed: " . mysqli_connect_error();
            }
            mysqli_query($conn, $sql);
        }
        
    }
header("Location: ../catalog.php");
    exit();
?>