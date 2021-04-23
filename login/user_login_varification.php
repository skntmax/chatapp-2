<?php
if(isset($_GET['img_upload'])){
	echo '<script> alert("Image Uploaded ")</script>';
}

$localhost="localhost";
$username="root";
$password="";
$db="chatapp";

$entered_email=$_POST['email'];
$entered_pass=$_POST['pass'];
$con=mysqli_connect($localhost,$username,$password,$db);
mysqli_set_charset($con,'utf8mb64');
if($con){
	$query="SELECT * FROM `userdata` WHERE `email`='$entered_email' ";
   echo "<script> $query </script> " ;
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res) > 0) {
		$fetch = mysqli_fetch_assoc($res);
		$fetch_pass = $fetch['pass'];
	
		if(password_verify($entered_pass, $fetch_pass)){
			
			$status = $fetch['status'];
			if($status == 'verified'){

				session_start();
			
				$_SESSION['sn']=$fetch['sn'];  
			   $il_time=time()+10;
   
		  $on_status= "UPDATE userdata SET  `last_seen`= '$il_time'  WHERE `sn`= ".$_SESSION['sn']; 
			  mysqli_query($con,$on_status);
			  require './dashboard.php';
		
			}


			else{
				$info = "It's look like you haven't still verify your email - $email";
				$_SESSION['info'] = $info;
				header('location: user-otp.php');
				exit();
			}
		}else{
			$errors['email'] = "Incorrect email or password!";
			header('location: ./../index.php?email_password_alert=1');
			exit();
		}
	}else{
		$errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
		header('location: ./../index.php?email_alert1=1');
	exit();
	}
    
}
    
else
{
die("sorry connection couldn't be established ");}
?>


