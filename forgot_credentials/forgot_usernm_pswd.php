<?php
include './../connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>forgot credentials</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./../sign_up/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../sign_up/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../sign_up/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../sign_up/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../sign_up/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./../sign_up/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../sign_up/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../sign_up/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./../sign_up/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../sign_up/css/util.css">
	<link rel="stylesheet" type="text/css" href="./../sign_up/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('./../sign_up/images/1.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Forgot username/password
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="./validate/reset_pswd.php" method="post">


					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" required="" type="text" name="email" placeholder="Enter Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>


					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
						Request otp
						</button>
					</div>

					<div class="text-center">
					 <a href="./../index.php"> Back  </a>	
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./../sign_up/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./../sign_up/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./../sign_up/vendor/bootstrap/js/popper.js"></script>
	<script src="./../sign_up/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./../sign_up/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./../sign_up/vendor/daterangepicker/moment.min.js"></script>
	<script src="./../sign_up/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./../sign_up/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./../sign_up/js/main.js"></script>

</body>
</html>
