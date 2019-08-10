<?php
    $output = "";
    if(isset($_POST['btnLogin2'])){
        include_once('../controller/dbcontroller.php');
//                include_once('../model/client.php');
        $dbcontroller = new dbcontroller();
        $output = $dbcontroller->clientLogin($_POST['Email'],$_POST['Password']);
        if($output){
            header('Location: reg.html');
        }else{
            $output = "Invalid email/Password";
        }
    }
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
   /*The image used*/
  background-image: url("images.jpg");
  width: 8;

  min-height: 380px;

   /*Center and scale the image nicely*/ 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
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
<div class="bg-img">
    <form action="Login2.php" method="POST" class="container">
    <h1>Login</h1>

    <label for="email"><b> Username or Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <button name="btnLogin2" type="submit" class="btn">Login</button>
     <p>If You have Not a member?</p>
     <a href="reg1.php">Register</a>
       
  </form>
   
</div>


</body>
</html>
