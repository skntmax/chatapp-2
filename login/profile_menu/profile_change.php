<?php

include './../connection/connection.php';
$id=$_POST['id'];
$files=$_FILES['change_Dp']['name'];
$temp_file=$_FILES['change_Dp']['tmp_name'];
$dir='./../images/uploads/'.$files; 
move_uploaded_file($temp_file, $dir)   

$q2="INSERT INTO `userdata`( `profile_dp`= '$dir' ) WHERE `sn`=$id "; 

mysqli_query($con,$q2);


?>