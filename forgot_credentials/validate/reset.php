<?php
session_start();
$email = $_SESSION['email'];
$curr_pass = $_SESSION['curr_pass'];

     include './../../connection/connection.php';
      $newpass = $_POST['new_pass'];
      $confirmpass = $_POST['cnf_pass'];
      $code = $_POST['otp'];
      $check = "SELECT * FROM userdata WHERE email = '$email'";
      $res = mysqli_query($con, $check);
      if(mysqli_num_rows($res) > 0){
    
     $fetch_data = mysqli_fetch_assoc($res);
     $fetch_code = $fetch_data['code'];
      if($newpass == $confirmpass && $code == $fetch_code )
         { $code = 0;
            $encpass = password_hash($newpass, PASSWORD_BCRYPT);
            $query = "UPDATE `userdata` SET `pass` = '$encpass', `code` = '$code' WHERE `email` = '$email'";
            $res = mysqli_query($con, $query);

            if($res){
               header("location: ./../../index.php?pass_update_alert1=1");
               exit();
            }
         } else
         {
            $code = 0;
            
            $query = "UPDATE `userdata` SET `pass` = '$curr_pass', `code` = '$code' WHERE `email` = '$email'";
            $res = mysqli_query($con, $query);

            header("location: ./../../index.php?pass_update_alert2=1");
            exit();
         }
   session_destroy();
      }
?>