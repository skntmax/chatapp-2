<?php


include './../connection/connection.php';
 
 session_start(); 

 $uid=$_SESSION['sn'];
 echo $uid;
 $time=time()+10;
  
  // $user_status_update_query= ; 
  $online_status_query= "UPDATE userdata SET  `last_seen`= '$time'  WHERE `sn`= '$uid' "; 
 
  mysqli_query($con,$online_status_query);
  mysqli_close();  
   


?>
