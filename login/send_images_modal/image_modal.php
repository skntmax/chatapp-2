<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Image
</button>

<!-- Modal -->
<div  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: rgba(0,0,0,0.2); ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choose pic</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="background-color: rgba(0,0,0,0.2); ">


         <form   id="upload_form" method="post" enctype="multipart/form-data">
    <div style="float: right;">
      <input type="file" id="file" name="file" >
     <button type="button" class="btn-primary mt-2" style="border-radius: 2px"  id="pic_submit"  >send  </button>    
    </div>
     
    </form> 

        ...
      </div>
      
    </div>
  </div>
</div>

	<script type="text/javascript">
	
$(document).ready(function(){
  
 $('#pic_submit').click(function(){
    
   var image_name= '<?php echo $_FILES['file']['name'];  ?> ';
   var image_tmp_name= '<?php echo $_FILES['file']['tmp_name'];  ?> ';   

   

  $.post("./../images/img_vrf.php", { img_name:image_name, tmp_name: image_tmp_name  } , function(data,status){
     document.getElementsByClassName('anyclass')[0].innerHTML=data; 

  });  
}); 
















// $(document).ready(function(){
//     // var form= $('#upload_form');    
//    $('#pic_submit').click(function(){
//       var fd=new FormData();
//       var files=$('#file')[0].files[0];
//       fd.append('file',files);
    
//       $.ajax({
//         url: './../images/img_vrf.php', 
//         method: 'POST',
//         data: fd,
//         contentType: false,
//         processData: false,
//         success: function(data,response){
//           if(response!=0){
//            $('#img').attr('src',response);
//             $('.preview img').show();
//             $('#anyclass').html(data);
//           } 
//           else{
//             alert("file not found ");
//           }
//           } 
//        });
    
//     });

//  $('#upload_form').submit(function(){
  
//   return false;
// })




	</script>