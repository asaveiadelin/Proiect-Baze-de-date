<?php

if (isset($_POST['save-submit'])) 
{

  require 'dbh.inc.php';
  session_write_close(); 
  session_start();
  $userid=(int) $_SESSION['utilizator_id'];
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  if (empty($lastname) ||empty($firstname) ||empty($username) || empty($email) || empty($address) ||empty($phone))
  {
  	header("Location: ../account.php?error=empty_fields&lastname=".$lastname."&firstname=".$firstname."&username=".$username."&email=".$email  );
	  exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
  {
    header("Location: ../account.php?error=invalid_username");
    exit();
  }
  else if (!preg_match("/^[a-zA-Z]*$/", $lastname) && !preg_match("/^[a-zA-Z]*$/", $firstname))
  {
    header("Location: ../account.php?error=invalid_lastname_firstname");
    exit();
  }
  else 
  {
      $sql = "UPDATE users SET email=?, user_name=? WHERE user_id=$userid;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../account.php?error=sqlerror");
            exit();
        }
        else 
        {
            mysqli_stmt_bind_param($stmt, "ss", $email,$username); 
            mysqli_stmt_execute($stmt);
            $w=(int) $_SESSION['utilizator_id'];
            $sql = "UPDATE users_details SET last_name='$lastname',first_name='$firstname',address='$address', phone='$phone' WHERE user_id=$w;";
            mysqli_query($conn,$sql);
        }
    
    $w=(int)$_SESSION['utilizator_id'];
    $sql = "SELECT * FROM users where user_id=$w;"; 
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        
            $row = mysqli_fetch_assoc($result);
        
            $_SESSION['utilizator_id'] = $row['user_id'];
            $_SESSION['utilizator_username'] = $row['user_name'];
            $_SESSION['utilizator_email'] = $row['email'];
    }

    $sql = "SELECT * FROM users_details where user_id=$w;"; 
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        
            $row = mysqli_fetch_assoc($result);

            $_SESSION['utilizator_lastname'] = $row['last_name'];
            $_SESSION['utilizator_firstname'] = $row['first_name'];
            $_SESSION['utilizator_address'] = $row['address'];
            $_SESSION['utilizator_phone'] = $row['phone'];
            header("Location: ../account.php");
            exit();
    }
  }
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else {
  header("Location: ../account.php");
  exit();
}
