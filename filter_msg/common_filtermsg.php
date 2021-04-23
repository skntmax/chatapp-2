
 
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
 

<script type="text/javascript">
  

 
  setInterval(runfunction,1000);
  function runfunction(){
   $.post("./../filter_msg/fetched_data/rtfd.php", {user: '<?php echo $_POST['email'];  ?>' } , function(data,status){
     document.getElementsByClassName('anyclass')[0].innerHTML=data; 

     });
   }

// setInterval(runfunction2,1000);
//   function runfunction2(){
//    $.post("./../filter_msg/fetched_data/rtfd.php", {user: '<?php echo $_POST['email'];  ?>' } , function(data,status){
//      document.getElementsByClassName('anyclass2')[0].innerHTML=data; 

//      });
//    }



 	
    // Get the input field
var input = document.getElementById("user_msg");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("submit_msg").click();

  }

  });


 	 $("#submit_msg").click(function(){
 	  const mymsg=$("#user_msg").val();
    var today = new Date();
   var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

		$.post('./../msg/msg.php',{ text : mymsg ,ip: '<?php echo $_SERVER['REMOTE_ADDR'];  ?>' , active_user: '<?php echo $_POST['email'] ;  ?>' , current_time: time  } , function(data,status){
        document.getElementsByClassName('anyclass')[1].innerHTML=data;
      });
	  
       $("#user_msg").val("");
      
      return false;
 	 });



 </script>
 
