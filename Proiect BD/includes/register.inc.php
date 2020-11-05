<?php

if (isset($_POST['signup-submit'])) 
{

  require 'dbh.inc.php';
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordRepeat = $_POST['password-repeat'];

  $address = $_POST['address'];
  $phone = $_POST['phone'];
  if (empty($lastname) ||empty($firstname) ||empty($username) || empty($email) || empty($password) || empty($passwordRepeat)||empty($address) ||empty($phone))
  {
  	header("Location: ../register.php?error=empty_fields&lastname=".$lastname."&firstname=".$firstname."&username=".$username."&email=".$email  );
	  exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
  {
    header("Location: ../register.php?error=invalid_username");
    exit();
  }
  else if (!preg_match("/^[a-zA-Z]*$/", $lastname) && !preg_match("/^[a-zA-Z]*$/", $firstname))
  {
    header("Location: ../register.php?error=invalid_lastname_firstname");
    exit();
  }
  else if($phone[0]!='0')
  {
    header("Location: ../register.php?error=phone_incorect");
    exit();
  }
  else if ($password !== $passwordRepeat)
  {
    header("Location: ../register.php?error=password_check&lastname=".$lastname."&firstname=".$firstname."&username=".$username."&email=".$email);
    exit();
  }
  else 
  {
    $sql = "SELECT * FROM users WHERE user_name=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
      
      header("Location: ../register.php?error=sqlerror1");
      exit();
    }
    else 
    {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCount = mysqli_stmt_num_rows($stmt);
      mysqli_stmt_close($stmt);
      if ($resultCount > 0) 
      {
        header("Location: ../register.php?error=usertaken&mail=".$email);
        exit();
      } 
      else 
      {
        $sql = "SELECT * FROM users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
          header("Location: ../register.php?error=sqlerror2");
          exit();
        }
          else 
          {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCount = mysqli_stmt_num_rows($stmt);
            mysqli_stmt_close($stmt);
            if ($resultCount > 0) 
            {
              header("Location: ../register.php?error=emailtaken&username=".$username);
              exit();
            } 
            else
            {
              $sql = "INSERT INTO users (user_name, email, pwd) VALUES (?, ?, ?);";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql))
              {
                header("Location: ../register.php?error=sqlerror3");
                exit();
              }
              else 
              {
                //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password); 
                mysqli_stmt_execute($stmt);

                $w=(int)$_SESSION['utilizator_id'];
                $sql = "SELECT * FROM users WHERE user_name='$username';";
                $result=mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                  $row=mysqli_fetch_assoc($result);
                  $w=(int)$row['user_id'];
                }
                $sql = "INSERT INTO users_details (last_name, first_name, address,phone,user_id) VALUES ('$lastname', '$firstname', '$address', '$phone', $w);";
                mysqli_query($conn, $sql);
                header("Location: ../register.php?signup=success");
                exit();
                
              }
            }
          }
        }
      }
    }
  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../register.php");
  exit();
}
