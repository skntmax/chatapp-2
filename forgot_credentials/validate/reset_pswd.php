<?php

include './../../connection/connection.php';
$email= $_POST['email'];

$errors = array();

  $email_check = "SELECT * FROM userdata WHERE email = '$email'";
  $res = mysqli_query($con, $email_check);
  if(mysqli_num_rows($res) > 0){

 $fetch_data = mysqli_fetch_assoc($res);
 $fetch_email = $fetch_data['email'];
 $curr_pass = $fetch_data['pass'];
  if($email==$fetch_email){
    $code = rand(999999, 111111);

    $query = "UPDATE `userdata` SET `code` = '$code' WHERE `email` = '$email'";
   $result=mysqli_query($con,$query);
  if($result)
  {  
    $subject = "Email Verification Code";
    $message = "Your verification code is $code";
    $headers = "From: ashishkumar56881965@gmail.com";
    echo $result;

    if(mail($email, $subject, $message, $headers)==true){
        $info = "We've sent a verification code to your email - $email";
        session_start();
        $_SESSION['curr_pass'] = $curr_pass;
        $_SESSION['errors']= $errors;
        $_SESSION['info'] = $info;
        $_SESSION['email'] = $email;
        header('location: user-otp.php');
        exit();
    }
else{
        $errors['otp-error'] = "Failed while sending code!";
        //header('location: ./../../index.php?otp_alert=1');
    }
}
  }
  
}
?>