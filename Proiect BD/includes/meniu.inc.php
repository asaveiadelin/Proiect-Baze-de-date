<?php
   session_write_close(); 
   session_start();
    
for($i=0;$i<$_SESSION['numar_categorii'];$i++)
{
    if (isset($_POST['buton_categorie'][$i] ))
    {
        require 'dbh.inc.php';
        $_SESSION['apasare']=$_SESSION['category_id'][$i];
        $x=(int)$_SESSION['apasare'];
        $sql = "SELECT * FROM products, category where products.category_id=category.category_id and category.category_id=$x;";
        if (!$conn) 
        {
			die("Connection failed: " . mysqli_connect_error());
		}
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
    }
}

header("Location: ../catalog.php");
exit();
?>

                