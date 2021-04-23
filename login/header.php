
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<style>
     .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {border-radius : 50%}
.div {
  margin: 0px ,0px ,25px,0px;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.img { 
  width: 75px;
  height:75px;
  float: left;
  border-radius: 50%;
border: none;

}
.topnav a.active {
  background-color: #4CAF50;
  color: white;
  padding: 17px;
  margin: 15px;
}
 
.circular--square {
  padding: 0;
  margin: 15px;
  border-radius: 50%;
}
</style>
</head>
<body>
<div class="topnav bg-dark" style="border-radius: 5px;">
<div><h3 class="text-white text-center" >Max Chat App</h3></div>
  <div class="container darker" style="float:left;">
  
  <?php
     
       $email = $fetch['email'];
       $user = $fetch['username'];
       $img_src = $fetch['profile_dp'];
       $id=$fetch['sn'];

   ?>  
     <img src="<?php echo $img_src; ?>" alt="Avatar" class="circular--square" id="prof_id">    
        


<a  href="#home"  style="margin-top: 25px; font-size: 13px;" id="c_prof_pic"><?php
   
   echo '<span 
    >'.$user.'</span><br> '." Change Profilie " ; 
            
   ?></a>
   </div>
</div>


******************modals ***************************

<!-- Button trigger modal -->
<button type="button" id="pp" class="btn btn-primary" data-toggle="modal" data-target="#profile_pic_change" style="visibility: hidden;">
  change Profile
</button>

<!-- Modal -->
<div class="modal fade" id="profile_pic_change" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Profile </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
       <input type="file" name="change_Dp" value="" id="dp">
       <p>Less than 200 Kb   </p>



      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" id="profile_submit">Save  </button>
      </div>
    </div>
  </div>
</div>






******************modals ***************************



<script type="text/javascript">
  
  $(document).ready(function(){
    $('#update_dp').click(function(){
     
       $('#btn_modal').click();
           

   }); 
  });
 </script>

<script type="text/javascript">

   


  
  $(document).ready(function(){

    $('#prof_id').click(function(){
       
       $('#some-label').on('click', function() {
      
     $('#myModal').modal('show');        
       }); 
    
    }); 

});

 


$(document).ready(function(){
$('#c_prof_pic').click(function(){
     
    $('#profile_pic_change').modal('show');

    });

});




</script> 
<?php
include 'img.php';
?>



</body>



