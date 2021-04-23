<?php
include './../../connection/connection.php';
session_start();
$_SESSION['info'] = "";
        $otp_code = $_POST['otp'];
        $check_code = "SELECT * FROM userdata WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE userdata SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
               header("Location: ./../../index.php?msg=1");
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
             header("Location: ./../../index.php?msg1=1");
        }
        ?>