<?php
    $output = "";
    if(isset($_POST['btnClient'])){
        include_once('../controller/dbcontroller.php');
                include_once('../model/client.php');
        $dbcontroller = new dbcontroller();
        $client = new Client(0,$_POST['Fullname'],$_POST['Email'],$_POST['Password']);
    $output = $dbcontroller->addContact($contact);
        if($output){
//                        $output = "yaaaa";
            header('Location: reg.html');
        }else{
            $output = "Invalid information try again";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body background="ic.jpg">
 
<form action="reg1.php" style="max-width:500px;margin:auto">
  <h2>Sign Up</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Full name" name="Fullname">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="Email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="number" placeholder="Password" name="Password">
  </div>
  


  <button name="btnClient" type="submit" class="btn btn-dark z-depth-2">Register</button>
</form>

</body>
</html>
