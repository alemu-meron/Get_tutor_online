 <?php
//    include_once('../Controller/AccountController.php');
//    include_once('../Model/Tutor.php');
    $output = "";
    if(isset($_POST['regBtn'])){
          include_once('../Controller/AccountController.php');
    include_once('../Model/Tutor.php');
        $accountController = new AccountController();
        $target="../Files/img/".basename($_FILES['img']['name']);
//        $target="../Files/doc/".basename($_FILES['cv']['name']);
        $tutor = new Tutor(0,$_POST['fullname'],$_POST['dob'],$_POST['gender'],$_POST['email'],$_POST['password'],$_POST['phoneno'],$_POST['address'],$_POST['story'],$_FILES['img']['name'] ); 
          
//        ,$_POST['eduStatus'],$_POST['school'],$_POST['experience'],$_POST['story'],$_FILES['img']['name'],$_FILES['cv']['name'],$_POST['pay']);
        $output = $accountController->addTutor($tutor);
        session_start();
          $pho=$_POST['phoneno'];
          $_SESSION['pho']=$pho;
        move_uploaded_file($_FILES['img']['tmp_name'], $target);
//        move_uploaded_file($_FILES['cv']['tmp_name'], $target);
        header("Location: tutorSignUp2.php");
    }
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="uni/css/bootstrap.css">
    <link rel="stylesheet" href="uni/css/animate.css">
    <link rel="stylesheet" href="uni/css/owl.carousel.min.css">

    <link rel="stylesheet" href="uni/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="uni/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="uni/fonts/flaticon/font/flaticon.css">
     <link href="uni/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="uni/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="uni/css/style.css" rel="stylesheet">

    <!-- Theme Style -->
    <link rel="stylesheet" href="uni/css/style.css">
  
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
                <a class="nav-link" href="about1.html">About</a>
              </li>
                      <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>

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
              <h2 class="mb-5">Register As A Tutor: Part 1</h2>
        
      <!--<div class="body mt-3 mb-3 justify-content-center" style="margin-left: 300px; margin-right: 300px; border-style: solid; border-width: 1px; border-color: black">-->
          <form method="POST" style="color: #757575;" enctype="multipart/form-data" action="tutorSignUp.php" style="max-width:500px;margin:auto">
    <!--Header-->
  
    

        <!--Body-->
        
       <div class="row">
        <div class="col-md-12 form-group">
            <label for="name">Full Name</label>
            <input  name= "fullname" type="text" id="name" class="form-control py-2">
         </div>
        </div>
            
        <div class="md-form">
            <div class="md-form input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text md-tabs">Date of birth</span>
               </div>
                <input name="dob" placeholder="Date of birth" type="date" id="date-picker-example" class="form-control datepicker">
                  <label for="date-picker-example"></label>
            </div>
        </div>
        
        <div class="input-group mb-3" >
            <select  name="gender" class="browser-default custom-select" id="inputGroupSelect01">
            <option selected>Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
        </div>
        
        <div class="row">
         <div class="col-md-12 form-group">
             <label for="name"> Email</label>
            <input name="email" type="email" id="name" class="form-control py-2">
        </div>
        </div>
        
        <div class="row">
        <div class="col-md-12 form-group">
             <label for="name">Password</label>
            <input name="password" type="password" id="name" class="form-control py-2">
           
       </div>
        </div>
        
        <div class="row">
        <div class="col-md-12 form-group">
            <label for="name">Mobile</label>
            <input name="phoneno" type="number" id="name" class="form-control py-2">
        </div>
        </div>
        
        <div class="row">
        <div class="col-md-12 form-group">
            <label for="name">Address</label> 
            <input name="address" type="text" id="name" class="form-control py-2">
         </div>
        </div>
            
        <div class="form-group mt-4">
           <label for="name">Story About Yourself (150 words)</label>
           <textarea name="story" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
        </div>
        
        <div class="input-group mt-4">
          <div class="input-group-prepend">
              <span class="input-group-text"id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
              <input name="img" type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Attach Your Photo</label>
          </div>
        </div>
     
        <div class="text-center mt-4">
            <button name="regBtn" type="submit" class="btn btn-dark z-depth-2">Submit</button>
            <p style="color:green;"><?php echo $output;?></p>
        </div>
       </form>      
    </div>
    
</div>
   </div>
          </div>
        </div>
      </div>
    </section>
<!--/Form with header-->
<footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
         
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
             <div class="row">
               <div class="col-md-6">
                 <ul class="list-unstyled">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="about1.html">About Us</a></li>
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
    

   
    </body>
    
     <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="uni/js/jquery-3.2.1.min.js"></script>
    <script src="uni/js/jquery-migrate-3.0.0.js"></script>
    <script src="uni/js/popper.min.js"></script>
    <script src="uni/js/bootstrap.min.js"></script>
    <script src="uni/js/owl.carousel.min.js"></script>
    <script src="uni/js/jquery.waypoints.min.js"></script>
    <script src="uni/js/jquery.stellar.min.js"></script>
    <script src="uni/js/jquery.animateNumber.min.js"></script>

    <script src="uni/js/main.js"></script>
             <!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</html>
