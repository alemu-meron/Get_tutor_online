fx <?php
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
    </head>
 
    <body>
        
        <div class="row d-flex justify-content-center">
            <h2 class="black-text mt-3 mx-5">Register As A Tutor: Part 1</h2>
        </div>
      <div class="body mt-3 mb-3 justify-content-center" style="margin-left: 300px; margin-right: 300px; border-style: solid; border-width: 1px; border-color: black">
          <form class="text-center" method="POST" style="color: #757575;" enctype="multipart/form-data" action="tutorSignUp.php">
    <!--Header-->
  
    <div class="card-body mx-4 ">

        <!--Body-->
        <div class="md-form mt-2" style="margin-right: 250px;">
            <input  name= "fullname" type="text" id="Form-email4" class="form-control">
            <label for="Form-email4">Full Name</label>
        </div>
        
        <div class="md-form" style="margin-right: 250px;">
            <div class="md-form input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text md-tabs">Date of birth</span>
               </div>
                <input name="dob" placeholder="Date of birth" type="date" id="date-picker-example" class="form-control datepicker">
                  <label for="date-picker-example"></label>
            </div>
        </div>
        
        <div class="input-group mb-3" >
            <select  name="gender" class="browser-default custom-select"  style="margin-right: 250px;" id="inputGroupSelect01">
            <option selected>Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
        </div>
        
        <div class="md-form" style="margin-right: 250px;" >
            <input name="email" type="email" id="Form-pass4" class="form-control">
            <label for="Form-pass4"> Email</label>
        </div>
        
        <div class="md-form" style="margin-right: 250px;" >
            <input name="password" type="password" id="Form-pass8" class="form-control">
            <label for="Form-pass8">Password</label>
       </div>
        
        <div class="md-form" style="margin-right: 250px;" >
            <input name="phoneno" type="number" id="Form-pass4" class="form-control">
            <label for="Form-pass4">Mobile</label>
       </div>
        
        <div class="md-form" style="margin-right: 250px;" >
            <input name="address" type="text" id="Form-pass6" class="form-control">
            <label for="Form-pass6">Address</label>  
        </div>
       
        <div class="form-group mt-4">
           <label for="Form-pass4">Story About Yourself (150 words)</label>
           <textarea name="story" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
        </div>
        
        <div class="input-group mt-4">
          <div class="input-group-prepend">
              <span class="input-group-text"id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
              <input name="img" type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label"    style="margin-right: 250px;" for="inputGroupFile01">Attach Your Photo</label>
          </div>
        </div>
     
        <div class="text-center mt-4">
            <button name="regBtn" type="submit" class="btn btn-dark z-depth-2">Submit</button>
            <p style="color:green;"><?php echo $output;?></p>
        </div>
             
    </div>
    </form>
</div>

<!--/Form with header-->


   
    </body>
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
