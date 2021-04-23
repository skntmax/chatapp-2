<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  *.{
    margin:0px;
    padding:0px;
  } 
.body {
  margin-top: 10px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 0px;
  width: 1500px;
  padding: 0 20px;
  height: 1vh;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 3px;
  padding: 0px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.anyclass{
   height:500px;
   overflow-y:scroll;

}

.anyclass2{
   height:500px;
   overflow-y:scroll;

}
.sidebar1{
   
  height: auto;
  overflow-y: auto;

}
.sidebar2{
   
  height: 700px;
  overflow-y:auto;

}
<meta charset="UTF-8">
</style>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> 

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" charset="utf-8" async defer></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

<link rel="stylesheet" type="text/css" href="./../emojionearea-master/dist/emojionearea.min.css">
<link rel="stylesheet" type="text/css" href="./../css/responsive.css">

<script type="text/javascript" src="./../emojionearea-master/dist/emojionearea.min.js"></script>
<script type="text/javascript">


</script>
<style >
   #user_msg{
    border-radius: 50px;
   }

   .*{
     margin: 0px;
     padding: 0px;
     box-sizing: border-box;
   }
  
   #net_user:hover{
   background-color: #f0f0f0;
   color:black;
 }
   

/*for large devices */

 
@media (min-width:1200px ){

 


}


/*for tablet landscape low resolution */

@media(max-width: 990px){
 #chatbox{
   width: 350px;
   float: left;
   height: 100vh; 


 }


}

/*Portrait tablet ereader kindle paper */


@media(max-width: 880px){

#chatbox{
   width: 500px;
   float: left;
   height: 100vh; 


 }

}
@media(max-width: 765px){
 
#tools_box{
  content:hidden; 
}


}

/*smartphones android apple phones */

@media(max-width: 600px){
 



}
 
  
</style>
  
</head>

<body class="body">
   

<?php include_once 'navbar.php';?>

   <div class="container-fluid " id="tools_box">
    <div class="row"  style="width: 1000px; margin-left: 10px;">

       <div class="col-sm-2 col-md-2 col-xl-2 sidebar1  ">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><h4>  Tools </h4></li>
              <li class="list-group-item">Audio call</li>
              <li class="list-group-item">Video call </li>
              <li class="list-group-item">Make a Note </li>
              <li class="list-group-item">Profile </li>
            </ul>
      </div>

      <div class="col-sm-10 col-md-10 col-xl-10">
             <div class="row" style="width: 800px; height: 500px;">
     <div class="col-sm-4 col-md-2 col-xl-3 sidebar2">
           <ul class="list-group list-group-flush">
              <li class="list-group-item"><h4>  Online Users  </h4></li> 

         
    <?php


   $_SESSION['email']=$fetch['email'];
   $_SESSION['pass']=$fetch['pass'];
   $_SESSION['username']=$fetch['username'];


    echo '<br><br>';
  
    
        $time=time();  
        $on_user_query='select * from userdata'; 
        $result=mysqli_query($con,$on_user_query);  
         $num=mysqli_num_rows($result);
         $time=time();  
         while($row=mysqli_fetch_assoc($result)){
          $status='offline';
          $class='danger';
        if($row['last_seen']>$time){
           
           $status='online';
           $class='success';
     
        }

     

     ?>
  
  <li class="list-group-item"> 

       <a href="./dashboard.php" target="_blank"> <li class="list-group-item" style="color:red;" id="net_user">  <?php echo $row['username'].'<br>'; ?> <span class="text-<?php echo $class;  ?>" >  <?php echo $status;  ?> </span> </li>         
       </a> </li> </ul> 
            <?php

}

    ?>  

    </div>
    
  <div class="col-sm-8 col-md-10 col-xl-9">

    <div class="container bg-dark" id="chatbox" style="width: 1050px; height: 800px;">
<?php 


include 'header.php'; 


 ?>
  

<div class="container-fluid" style="border: 1px solid green; background-color: white; " >
  


  <div class="anyclass" style="background-image: :url('./images/chat_back.jpg') ;">
  
  
  </div>
</div>





<!-- <form action="./../msg/msg.php" method="post" > -->
  <input type="text" name="msg" id="user_msg" class="form-control mb-2 " placeholder="Type a message ">
  
 <button type="submit" class="btn btn-primary" id="submit_msg">send</button>

 <?php

 require './send_images_modal/image_modal.php';
 
 ?>
    
   
   <!-- <input type="file" name="pic" class="btn" id="pic_id">   -->
  
  

<!-- </form> -->

</div>
<?php

 include './../filter_msg/fltrmsg.php';

echo '</div>';
?>


<script type="text/javascript">



// ************pic modal ************

//  $(document).ready(function(){
//     var form= $('#upload_form');    
//    $('#pic_submit').click(function(){
     
//      $.ajax({
//       url: './../images/img_vrf.php',  
//       type: "POST",
//       data: $('#upload_form input').serialize(),
      
//        success: function(data){
//        console.log(data);
//     }

//      }); 

//    });  
// }); 




// $(document).ready(function(){
//     var form= $('#upload_form');    
//    $('#pic_submit').click(function(){
//       var fd=new FormData();
//       var files=$('file')[0].files[0];
//       fd.append('file',files);

//       $.ajax({
//         url: './../images/img_vrf.php',
//         method: 'POST',
//         data: fd,
//         contentType: false,
//         processData: false,
//         success: function(response){
//           if(response!=0){
//            $('#img').attr('src',response);
//             $('.preview img').show();
//           } 
//           else{
//             alert("file not found ");
//           }
//           } 



//        });
    
//     });  
// } ); 
 
  function status_update(){
 $.ajax({ 

  url:'./../user_status/u_status.php ', 
    success:function(){
     console.log(" executed");
           }
  }); 
}
    
setInterval(function(){
status_update();},3000);  

function get_user_status( ){
  var live_status= 'live_status';
 $.ajax({ 

  url:'./../user_status/get_ser_status.php',
  data: { live_status: live_status } 
    success:function(result){
      $('#status_grid').html(result); }
  }); 

}

$(document).ready(function(){

 get_user_status();

}); 
    
setInterval(function(){
get_user_status();},5000); 

$(document).ready(function(){
  
  $('#net_user').click(function(){
     
     $.ajax({
      



     });

  })

});



</script> 
      
    </div>

  </div>
        
      </div> 
      
    </div>
    
  </div>




  
</nav>

    
  

 
   
 





<!-- / ************pic modal ************




// ************   emoj ******************* -->
  <!--  //   $(document).ready(function(){
     
   //   $("#user_msg").emojioneArea({
   //   pickerPosition:"top"

   // });

   //   });      
     -->

 <!-- / ************   emoj *******************

  -->

    



</body>
</html>
