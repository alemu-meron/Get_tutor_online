<?php
 include_once '../model/dblogin.php';

if(isset($_POST['last_day_attend'])and isset($_POST['reason']) and isset($_POST['request_type'])){
    
  $last_day_attend=$_POST['last_day_attend']; 
   $reason=$_POST['reason'];
    $request_type=$_POST['request_type'];
   echo $user;
  
   $db=new dblogin();
   $result=$db->requ($last_day_attend,$reason,$request_type);
   
       if($result =='1'){
       echo 'sucessfuly login';
      
       }
       else {
       
           echo 'error';
       }
    

}

