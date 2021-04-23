<?php
if(isset($_GET['msg'])){
	echo '<script> alert("account created please login ")</script>';
}
if(isset($_GET['msg1'])){
	echo '<script> alert("otp incorrect! ")</script>';
}
if(isset($_GET['otp_alert'])){
	echo '<script>alert("Failed while sending code!")</script>';
}
if(isset($_GET['db_alert'])){
	echo '<script>alert("Failed while inserting data into database!")</script>';
}
if(isset($_GET['signup_alert'])){
	echo '<script> alert("please sign up before login ")</script>';
}
if(isset($_GET['password_alert'])){
	echo '<script> alert("incorrect password ") </script>'; 
}
if(isset($_GET['email_password_alert'])){
	echo '<script> alert("Incorrect email or password! ") </script>'; 
}
if(isset($_GET['email_alert1'])){
	echo '<script> alert("It look like you are not yet a member! Click on the bottom link to signup.") </script>'; 
}
if(isset($_GET['pass_update_alert1'])){
	echo '<script> alert("Password updated. Please login! ") </script>'; 
}
if(isset($_GET['pass_update_alert2'])){
	echo '<script> alert("Credentials not matched. Please try later! ") </script>'; 
}
if(isset($_GET['logout_alert'])){
	echo '<script> alert("Log out Succesfully ")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="./login/user_login_varification.php" method="post">
					<span class="login100-form-title">
						Chat app 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="./forgot_credentials/forgot_usernm_pswd.php">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="./sign_up/index.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>