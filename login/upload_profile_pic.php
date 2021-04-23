 
 <?php
 include './../connection/connection.php';
$name = $_GET ['user'];
$email = $_GET['email'];

echo $name;


 ?>
        <h5 >Choose Profile Picture</h5>
       
     
     
      <form action ="pic_upload.php?user=<?php echo $name;?>&email=<?php echo $email;?>" method="post" enctype="multipart/form-data">
      <div style="float: right;">
      <input type="file"  name="img_file" >
  
     <button type="submit" name = "upload" class="btn-primary mt-2" >Upload</button>    
    </div>
     
    </form> 

        ...
      </div>
      
    </div>
  </div>
</div>