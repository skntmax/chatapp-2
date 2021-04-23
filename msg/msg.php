<?php
include './../connection/connection.php'; 

session_start();

$msg=$_POST['text'];
$ip=$_POST['ip'];
$active_user=$_POST['active_user'];
// echo  "active user :".$active_user;
$time=$_POST['current_time'];
mysqli_set_charset($con,'utf8mb64');
 

$q="INSERT INTO `msg_table`(`msg`, `ip`, `id_username` ,`time`  ) VALUES ('$msg','$ip', '$active_user' ,'$time' )";
// echo "<script> alert("q ready to executed "); </script>";
if(mysqli_query($con,$q)){
// echo "<script> alert("q executed "); </script>";
   
  mysqli_close($con);
}
else{
	echo '<script> alert("not sent"); </script>';
}










?>