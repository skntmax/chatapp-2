<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "chatapp";

    $con = mysqli_connect($localhost, $username, $password, $database);

        if($con){
  
    }
    else{
        die("sorry connection couldn't be stablished ");
    }
    
    ?>