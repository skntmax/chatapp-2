<?php
session_start();
$email = $_SESSION['email'];
if($email == false){
header('Location: ./../index.php?email_alert1=1');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../../sign_up/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../../sign_up/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../../sign_up/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../../sign_up/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./../../sign_up/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../../sign_up/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../../sign_up/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./../../sign_up/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./../../sign_up/css/util.css">
	<link rel="stylesheet" type="text/css" href="./../../sign_up/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('./../../sign_up/images/1.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Reset Password 
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="reset.php" method="POST" autocomplete="off">

                <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($_SESSION['errors']) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="wrap-input100 validate-input" data-validate = "Enter New Password">
						<input class="input100" required="" type="password" name="new_pass" placeholder="Enter New Password">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirm New Password">
						<input class="input100" required="" type="password" name="cnf_pass" placeholder="Confirm New Password">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter OTP">
						<input class="input100" required="" type="password" name="otp" placeholder="Enter OTP">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
						Reset 
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./../../sign_up/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./../../sign_up/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./../../sign_up/vendor/bootstrap/js/popper.js"></script>
	<script src="./../../sign_up/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./../../sign_up/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./../../sign_up/vendor/daterangepicker/moment.min.js"></script>
	<script src="./../../sign_up/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./../../sign_up/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./../../sign_up/js/main.js"></script>

</body>
</html>