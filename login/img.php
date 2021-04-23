<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('#profile_submit').click(function(){
       var user_id = '<?php echo $id; ?>';  
    var fd=  new FormData(); 
    var files=$('#dp')[0].files[0];
    fd.append('file',files);  
    console.log(files);      
     $.ajax({

   url: './../profile_menu/profile_change.php', 
        method: 'POST',
        data: {fd , id: user_id },
        contentType: false,
        processData: false,
        success: function(response){
          if(response!=0){
           $('#dp').attr('src',response);
            // $('.preview img').show();
          } 
          else{
            alert("file not found ");
          }

     });


    }); 

</script>