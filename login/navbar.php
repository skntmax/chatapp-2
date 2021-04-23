<?php
 // require './profile_menu/profile_menu.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Users  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Chatrooms  <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
     
  </button>
<!-- ******************************user info************************** -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" style="border-radius: 70px;" data-toggle="modal" data-target="#users_bio">
  <?php

  echo '<span style="color:white; id="prof_id" class="glyphicon glyphicon-user">'.$fetch['username'].'</span>';
 ?> 
</button>

<!-- Modal -->
<div class="modal fade" id="users_bio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $fetch['username'].'\'s bio';  ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            


  <table class="table">
  <thead>
    <tr>
      
    </tr>
  </thead>
  <tbody>
    <tr>
       <form   method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <th scope="row" >Username</th>
      <td><input type="text" name="up_username" id="username" placeholder="username"  ></td>
      
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><input type="password" name="up_password" id="pass" placeholder="password" class="glyphicon glyphicon-lock"></td>
      
    </tr>
    <tr>
      <th scope="row">Contact</th>
      <td><input type="number" name="u_mob" id="mob" placeholder="mobile number " class="glyphicon glyphicon-phone-alt"></td>
     

    </tr>
    <tr>
      
      <td scope="row" colspan="2">
<button type="button" class="btn btn-primary btn-sm btn-block" id="bio_submit"> Update information </button></td>  
       
        </form>
      

      
    </tr>
  </tbody>
</table>



      </div>
      
    </div>
  </div>
</div>

<!-- ******************************user info************************** -->


  <button type="button " class="btn btn-success btn-sm"  id="u_logout" style="border-radius: 50px;" >logout</button> 
  </div>

  </div>

<style>
 

   #u_logout{
     margin-left:5px;
     }

</style>

<script>
 $('#u_logout').click(function(){
   
  window.location = "./../index.php?logout_alert=1" ;
 });
 
 $(document).ready(function(){

  $('#profile_info').click(function(){

   $('#user_info').click();
  }); 

 });

$(document).ready(function(){

 $('#bio_submit').on('click',function(){
    var current_uname = $('#username').val();
    var current_upass = $('#pass').val();
    if((current_uname=="" || current_upass=="") || (current_uname=="" && current_upass=="") ){
       current_uname= '<?php echo $fetch['username'];  ?>';
       current_upass= '<?php echo $fetch['pass']; ?>';
    } 
    var User_id = '<?php echo $_SESSION['sn'] ;?>';
    var mob = $('#mob').val(); 
   
    // var fd=  new FormData(); 
    // var files=$('#user_prof')[0].files[0];
    // fd.append('file',files);  
    // console.log(files);
 $.ajax({
        url: './save_bio/save_bio.php',
        type: 'POST',
        data: {
          c_username: current_uname,
          c_upass: current_upass,
          c_uid:User_id,  
          current_umobile: mob
          
             } ,
        success: function(data,status) {
                    alert("Information updated ");
                    }  

      }); 
  
 }); 

}); 



</script>