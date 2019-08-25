<?php
    $output = "";
    if(isset($_POST['btnLogin2'])){
        include_once('../controller/dbcontroller.php');
                include_once('../model/client.php');
        $dbcontroller = new dbcontroller();
        $output = $dbcontroller->clientLogin($_POST['Email'],$_POST['Password']);
        if($output){
            header('Location: home.php');
        }else{
            $output = "Invalid email insert correct data";
//                      $echo= "Invalid email insert correct data";
        }
                
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head> 
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
  /*margin: 10% 40% 40% 10%;*/

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
                .row{
                    margin: 5% 10% 10% 10%;
                }
                .form{
                    margin: -7% 10% 2% 5% ;
                }
        </style>
<body>
   <div class="row">
  <div class="col-sm-6 mb-3 mb-md-0">
    <div class="card">
      <div class="card-body">
          <div class="bg-img">
               <h4><strong>Already am member</strong></h4>
  <p>welcome back! If you have already are a member of Rosí.com tutor provider, please log in and observe what we have here.</p>
 <div class="form">
      <form action="Login2.php" method="POST" class="container">
    <!--<h4>Login</h4>-->

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <button name="btnLogin2" class="btn btn-black" type="submit" >Login</button>
       </form>
 </div>
</div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body"> 
          <h4 class="card-title"><strong>New Client of Rosi.com</strong></h4>
               <p class="card-text"> Welcome! Interested in becoming a Rosi.com customer? Just create an account and you're on your way to access what we </p>
        <a href="reg1.php" class="btn btn-dark">Register Now</a>
      </div>
    </div>
  </div>
    </div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>
 