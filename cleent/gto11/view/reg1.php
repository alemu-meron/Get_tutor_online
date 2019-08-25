<?php
    $output = "";
    if(isset($_POST['btnRegister'])){
        include_once('../controller/dbcontroller.php');
        include_once('../model/client.php');
     $date = date("Y-m-d H:i :s",time());
        $client = new client(0,$_POST['Fullname'],$_POST['Phonenumber'],$_POST['Email'],$_POST['Password'],$_POST['Dateofbirth']);
        $dbcontroller = new dbcontroller();
        $output = $dbcontroller->addclient($client);
           if($output){
            $output = "Invalid info insert new";
               header('Location: reg1.php');
                     }else{
            $output = "Invalid info insert new";
        }

    }
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
    </head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

    <form action="reg1.php" method="POST" style="max-width:500px;margin:auto">
  <h2>Registration Form</h2>
  <div class="input-container">
    <i class="btn-dark fa fa-user icon"></i>
    <input  class="input-field" type="text" placeholder="Fullname" name="Fullname">
  </div>

  <div class="input-container">
    <i class="btn-dark fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="Email">
  </div>
  <div class="input-container">
    <i class="btn-dark fa fa-key icon"></i>
    <input class="input-field" type="number" placeholder="Password" name="Password">
  </div>

 
  
  <div class="input-container">
    <i class="btn-dark fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="phone number" name="Phonenumber">
  </div>
  <div class="input-container">
    <i class="btn-dark far fa-calendar-alt icon"> DOB</i>
    <input class="input-field" type="date" placeholder="Date of birth" name="Dateofbirth">
  </div>

  <button name="btnRegister" class="btn btn-dark" type="submit" >Register</button>
  <p class="font-small grey-text d-flex justify-content-center mt-3">login to your new account<a href="Login2.php" class="font-weight-bold ml-1" style="color: black">Log In</a></p>

 
</form>
    
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
 
