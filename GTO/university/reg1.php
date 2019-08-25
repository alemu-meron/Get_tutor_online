<?php
    $output = "";
    if(isset($_POST['btnRegister'])){
        include_once('../controller/dbcontroller.php');
        include_once('../model/client.php');
     $date = date("Y-m-d H:i :s",time());
        $client = new client(0,$_POST['Fullname'],$_POST['Phonenumber'],$_POST['Email'],$_POST['Password'],$_POST['Dateofbirth']);
        $dbcontroller = new dbcontroller();
        $output = $dbcontroller->addclient($client);
//           if($output){
//            $output = "Invalid info insert new";
//            $message = "Successfuly inserted";
//echo "<script type='text/javascript'>alert('$message');</script>";
//               header('Location: reg1.php');
//                     }else{
//            $output = "Invalid info insert new";
//        }

    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
     <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
   <style>
      .site-section  { margin-top: -25%;
                }
  </style>
        <body>
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
                  
       <a class="nav-link p-0" href="#">
          <img src="..\view\img\logo.PNG" class="rounded-circle z-depth-0"
              alt="avatar image" height="60" width="60"> </a> 
          <a class="navbar-brand absolute" href="index.html">Get tutor here!</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
                <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
       
        </ul>

              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
                      <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
 <ul class="navbar-nav absolute-right">
                     <!--<li class="nav-item dropdown">-->
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Login</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Client</a>
          <a class="dropdown-item" href="login2.php">Tutor</a>
              </div>
      
                 <!--<li class="nav-item dropdown">-->
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Register</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="reg1.php">Client</a>
          <a class="dropdown-item" href="../view/tutorSignUp.php">Tutor</a>
              <!--</div>-->
        </li></ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/bb.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">  
                </div>
        </div>
      </div>
    </section>
      <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Register new account</h2>
              <form action="reg1.php" method="POST" style="max-width:500px;margin:auto">
      <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Full name</label>
                      <input type="text" id="name" name="Fullname" class="form-control py-2">
                    </div>
                  </div>
                   <div class="row">
                   <div class="col-md-12 form-group">
                      <label for="name">Phone Number</label>
                      <input type="number" name="Phonenumber" id="name" class="form-control py-2 ">
                   </div></div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      <input type="email" name="Email" id="name" class="form-control py-2">
                    </div>
                  </div>
              <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Password</label>
                      <input type="number" name="Password" id="name" class="form-control py-2">
                    </div>
              </div>
                  <div class="row ml-1">                                    
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">Date of Birth</label>
                      <input class="input-field" type="date" placeholder="Date of birth" name="Dateofbirth">
                    </div>
                  </div>
                  </div>
                  <div class="row justify-content-center">
                      <div class="column">
 <button name="btnRegister"  type="submit" class="btn btn-black" style="background-color:whitesmoke;text-color:white;margin-left:auto;margin-right:auto;display:block;margin-bottom:0%">submit</button>
    <p style="color:green;"><?php echo $output;?></p>
 <!--<p style="color:green;"><?php echo $output;?></p>-->               
 <!--<button name="btnRegister" class="btn btn-dark" type="submit" >Submit</button></div>-->
                      <p >Login to your new account<a href="login.php" class="font-weight-bold ml-1" style="color: black">Log In</a></p>
                         </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
  <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
         
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
             <div class="row">
               <div class="col-md-6">
                 <ul class="list-unstyled">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="register.html">Registration</a></li>
                 </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="https://www.nazret.com">News</a></li>
                  <li><a href="www.aait.edu.et">Support</a></li>
                  <li><a href="./view/contact.php">Contact</a></li>
                  <!-- <li><a href="#">Privacy</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
    
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Registration and service providers training </a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> September  29, 201</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Selection  </a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> October  12, 201</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">AAIT. ARADA SUB CITY, ADDIS ABAB, ETHIOIA,</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+251 3883 6996</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">Rosi2019@gmail.com</span></a></li>
                <!-- <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li> -->
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="index.php" target="_blank" class="text-primary">ROSI</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
  </body>
</html>