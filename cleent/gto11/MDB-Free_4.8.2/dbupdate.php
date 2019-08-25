
<?php
 include_once '../model/dblogin.php';

if(isset($_POST['user']) && isset($_POST['newpass'])){
  $user=$_POST['user']; 
 
   $newpass=$_POST['newpass'];
 
  
   $db=new dblogin();
   $result=$db->up($user,$newpass);
   
       if($result =='1'){
       echo 'sucessfuly login';
       }
       else {

           echo 'error';        
       }
    
      
}