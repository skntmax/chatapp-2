<?php

$user = $_GET['user'];
$email = $_GET['email']; 

 if(isset($_POST['upload'])){
     $pic_name = $_FILES['img_file'];
     $file_name = $_FILES['img_file']['name'];
     $temp_path = $_FILES['img_file']['tmp_name'];

      $file_ext = explode(".", $file_name);
      $ext = strtolower(end($file_ext));

    $ext_arr = array('jpg','png','jpeg');

    include './../connection/connection.php';

    $destination = './images/'.$file_name;
    $real_path = './../login/images/'.$file_name;
  
    if(in_array($ext,$ext_arr))
       {
        move_uploaded_file($temp_path,$destination);
           
     
     if($con){
        $query="UPDATE `userdata` SET `profile_dp`='$real_path' WHERE `email`='$email'";
        if($result=mysqli_query($con,$query)){
            echo '<script> alert("Image Uploaded ")</script>';
        }
    }
}else{
    echo "Extension cannot compatible";
}
 }
?>