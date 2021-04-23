<?php

 include './../connection/connection.php';


 session_start();
extract($_POST);
 $act_user=$_SESSION['email']; 
 $serv_addr = $_SERVER['REMOTE_ADDR']; 
 // $name_file=$_FILES['file']['name']; 
 $dir_path='./uploads/'.$img_name;

 move_uploaded_file($tmp_name,$dir_path);
 $real_path='./../images/uploads/'.$img_name ; 
 
 $q="INSERT INTO `msg_table` (`id_username`, `ip`, `pic`) VALUES ('$act_user','$serv_addr','$real_path	')"; 

 if(mysqli_query($con,$q)){
    echo 'alert("inserted ")'; 
    // header("location:./../login/dashboard.php");

 }else{

   echo "error";

 }



?>