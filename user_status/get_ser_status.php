<?php


include './../connection/connection.php';
 
 session_start(); 

 $uid=$_SESSION['sn'];
 $username=$_SESSION['username'];
 
 echo $uid;
  extract($_POST);

 if(isset($_POST['live_status'])) {
   
 $html=' <div class="col-sm-4 col-md-2 col-xl-3 sidebar2">
           <ul class="list-group list-group-flush">
              <li class="list-group-item"><h4>  Online Users  </h4></li> ';
 $time=time(); 

    $result=mysqli_query($con,"select * from userdata");  
     $num=mysqli_num_rows($result);  
     while($row=mysqli_fetch_assoc($result)){
      
     $status='offline';
     $class='danger';

   if($row['last_seen']>$time){
      
      $status='online';
      $class='success';

   }

    $html.=' <ul class="list-group list-group-flush">
   <li class="list-group-item" style="color:red;">'.echo $row['username'].'<br>'. ' <span class="text-'.php echo $class .'  >  '.echo $status .'  </span>  </li></a>         
            </ul> '; 

} 
echo $html;
}
?>
