<?php
session_start();
include './../../connection/connection.php';
$email= $_POST['email'];
$pass=$_POST['pass'];
$username=$_POST['username'];
$cpass=$_POST['cpass'];
$errors = array();
// echo $email.$pass.$username."\n";


if($con){
   $default_con="./../images/profile_img/default_user.png";
   if($pass !== $cpass){
    header('location: ./../index.php?password_alert=1');
    exit();
  }

  $email_check = "SELECT * FROM userdata WHERE email = '$email'";
  $res = mysqli_query($con, $email_check);
  if(mysqli_num_rows($res) > 0){
    $errors['email'] = "Email that you have entered is already exist!";
    header('location: ./../index.php?email_alert=1');
    exit();
  }
  if(count($errors) === 0){
    $encpass = password_hash($pass, PASSWORD_BCRYPT);
    $code = rand(999999, 111111);
    $status = "not verified";

   $query = "INSERT INTO `userdata`(`username`, `email`, `pass`, `profile_dp`, `code`, `status`) VALUES ('$username', '$email', '$encpass', '$default_con','$code', '$status')";
   $result=mysqli_query($con,$query);
  if($result)
  {  
    $subject = "Email Verification Code";
    $message = "Your verification code is $code";
    $headers = "From: ashishkumar56881965@gmail.com";
    echo $result;

    if(mail($email, $subject, $message, $headers)==true){
        $info = "We've sent a verification code to your email - $email";
        $_SESSION['errors']= $errors;
        $_SESSION['info'] = $info;
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        header('location: user-otp.php');
        exit();
    }else{
        $errors['otp-error'] = "Failed while sending code!";
        header('location: ./../index.php?otp_alert=1');
    }
}else{
    $errors['db-error'] = "Failed while inserting data into database!";
    header('location: ./../index.php?db_alert=1');
}
}

}
?>
