<?php

include './../connection/connection.php'; 

$actual_image_name=$_POST['image_name'];
echo $actual_image_name;
$user =$_SESSION['email'];
$ip=$_POST['ip'];
 `<script> console.log(<?php  echo \".$actual_image_name.\" ;   ?> ); </script>`;
  $img_q="INSERT INTO `msg_table`( `id_username`, `ip` `pic`) VALUES ( '$user' , '$ip' '$actual_image_name' ) "; 
 if(mysqli_query($con,$img_q)){

  // echo `<script> console.log( "path inserted  "); </script> `;
  mysqli_close($con);
 }
 else{
 	echo "failed";
  echo "<script> alert(" not inserted " );  </script> ";

 }

?>