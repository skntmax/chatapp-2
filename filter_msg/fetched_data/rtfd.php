<?php 


include './../../connection/connection.php';

session_start();

$online_user=$_POST['user'] ;
echo '<script> alert("submitted") ;</script>'; 
$q="SELECT * FROM `msg_table` ";
$result=mysqli_query($con,$q);

$q2="SELECT `profile_dp` FROM `userdata` WHERE `email`='$online_user' ";
$new_user=mysqli_query($con,$q2);
$final_user_dp=mysqli_fetch_array($new_user); 

 if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)){
      ?>
 <div class="container sep_msg " id="msg msg_container" style=" background-color: white; border: 0px none white; " >

   <?php
   if($row['id_username']==$online_user){
     
     $temp_user=$row['id_username'];
    $fetch_image_query_current_user= "SELECT `profile_dp` ,`username` FROM `userdata` WHERE `email`='$temp_user' ";
     $other_user_array= mysqli_query($con,$fetch_image_query_current_user);
     $current_user_dp_username=mysqli_fetch_assoc($other_user_array);
  ?>
    
     
       <div class="row">
         <div class="col-sm-6">
           
         </div>
        
        <div class="col-sm-6">
        
          <span class=" text-white " > <img src="<?php  echo $final_user_dp['profile_dp'];  ?>" alt="Avatar" style="width:100%;" class="right">

          <p  id="w3review" name="w3review" style="float: Right; border-radius: 10px ; background-color: #3daeeb ; color:white ; "> <?php
   echo  '<span class="text-dark" >'. 'IP : '.$row['ip'].''.$current_user_dp_username['username'].'<br><br>';

           echo '<span class="text-light">'.$row['time'].": ". $row['msg'].'</span>' ;  ?>  </p>
           
         </div>


      </div>
      
  <?php 
    


   }
   else{

    $fetch_image_query= "SELECT `profile_dp` ,`username` FROM `userdata` WHERE `email`='$row[id_username]' ";
     $other_user_array= mysqli_query($con,$fetch_image_query);
     $real_dp=mysqli_fetch_assoc($other_user_array);

      
  
  
   

  ?> 

    <div class="row">
         <div class="col-sm-6 col-md-7 col-xl-6">
          <span class=" text-dark " > <img src="<?php
           
            echo $real_dp['profile_dp'];


              ?>" alt="Avatar" style="width:100%; " class="left" onclick="info()">
          
          <p  id="w3review" name="w3review" style="float: left; border-radius: 10px ; background-color: #66e3e3 ; color:white ; "> <?php
  echo  '<span class="text-dark" >'. 'IP : '.$row['ip'].''.$real_dp['username'].'<br><br>';

           echo '<span style="color:white;">'.$row['time'].": ". $row['msg'].'</span>';  ?>  </p>
           

         </div>
        
        <div class="col-sm-6 col-md-5 col-xl-6">
          
         </div>


      </div> 
  <?php

   }

   ?>
     <?php 
  // print_r($row);
  
  ?></span>
  <div style="border-radius: 5px; background-color: white;">
  

   <?php 
    if($row['msg']== "" && $row['id_username']==$online_user ){
    ?> 
    <div class="row">
      <div class="col-md-8">
       
     </div> 

      <div class="col-md-4">
        <div  class="img_vid">
            <img src=" <?php echo $row['pic']; ?>" class="img-thumbnail thumbnail" id="mainimage" style=" float: left; " > 
        </div>  
       
     </div>

    </div>

      <?php 
  } 
  
  else{  

     ?>
      <div class="row">
      <div class="col-md-4">
       
     </div> 

      <div class="col-md-8">
        <div  class="">
            <img src=" <?php echo $row['pic']; ?>" class="img-thumbnail thumbnail" id="mainimage" style="float:right ; " > 
        </div>  
       
     </div>

    </div>
   


     <?php   



  }


      ?>

   <?php 

   //  } 
   //  else{

   //    if($row['msg']=="aditi"){
          ?>
     <!-- <a href="https://sknt.tech" title="hey baby" target="_blank">hello bacch 😘😘 </a> -->
           
       <?php 
   //      }
   //        else if($row['msg']=="TC hubby"){
   //         echo '<img class="img-thumbnail "src="./../images/lv/kiss.jpg" alt="">';
   //       }

   //       else if($row['msg']=="gunnai baabu"){
   //         echo '<img class="img-thumbnail "src="./../images/back/back 2.gif" alt="" >';
   //         echo '<h1>Gunaai baabu 💘😘😙 </h1> ';
   //       }
   
   // else if($row['msg']=="mrng baabu"){
   //         echo '<img class="img-thumbnail "src="./../images/back/bg 5.gif" alt="">';
   //         echo '<h1>Mrng jaan 💘😘😙 </h1> ';
   //       }
   
   // else if($row['msg']=="Love u shashi ji"){
   //         echo '<img class="img-thumbnail "src="./../images/back/back 6.gif" alt="">';
   //         echo '<h1>Love you more than you do 💘😘😙 </h1> ';

   //       }
   
  

               ?> 
     <?php


    // }

     ?>  




    
  </div>
  
   
</div>
 <script type="text/javascript">

   $(document).ready(function(){
    const ele= document.getElementById("msg"); 
    
    $("#msg").mouseleave(function(){
       ele.background-color = red; 


    });

   }); 

$(document).ready(function() {
    // Attach to all thumbnails (give all images a class of 'thumbnail')
    $('img.thumbnail').click(function() {
        // Let us assume your thumbs and medium images are thus:
        // Thumb: /admin/image/proSml/96.jpg
        // Medium: /admin/image/proMed/96.jpg

        // Reset source of main image based on thumbnail
        var thumbSrc = $(this).attr('src');
        var medSrc = thumbSrc.replace('proSml', 'proMed');
        $('#mainimage').attr('src', medSrc);
    });
 });
 
$('document').ready(function(){

$('#msg_container').mouseleave(function(){
$('#msg_container').css("background-color","red" );

}); 

}); 

function info(){
  console.log("info");
}
 </script>
  
      <?php          

   }

}

 



?>













  

