<?php

include './../../connection/connection.php';
 
$c_username=$_POST['c_username'];
$c_uid=$_POST['c_uid'];
$c_upass=password_hash($_POST['c_upass'], PASSWORD_BCRYPT) ; 
$current_umobile=$_POST['current_umobile']; 
// $filename=$_FILES['up_profile']['name'];
// $temp_name=$_FILES['up_profile']['tmp_name'];   
// $dir='./../../images/uploads/'.$filename;
// $final_path= "'".$dir."'";

move_uploaded_file($temp_name,$dir);         
	// extract($_POST[]);  

 if(isset($c_username)){

$q= "UPDATE `userdata` SET `username`= '$c_username' , `pass`= '$c_upass' , `mobile`='$current_umobile'  WHERE `sn` = $c_uid  ";  
 mysqli_query($con,$q);
 
    }

?>