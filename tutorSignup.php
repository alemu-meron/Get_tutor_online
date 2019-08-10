<?php
    $output = "";
    if(isset($_POST['btnSignup'])){
        include_once('..\controller\AccountController.php');
        include_once('..\model\Tutor.php');
        $date = date("Y-m-d H:i:s",time());
        $tutor = new tutor(0,$_POST['full_name'],$_POST['date_of_birth'],$_POST['address'],$_POST['gender'],$_POST['email'],$_POST['education_status'],$_POST['experiance'],$_POST['self_discription'],$_POST['phone'],$_POST['photo'],$_POST['password']);
        $accountController = new AccountController();
        $output = $accountController->addTutor($tutor);
    }
?>
<html>
    <head>
        <title>Register As A Tutor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">  
    </head>
      <body>     
      <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
                    <!-- Material form register -->
                    <div class="card" >

                    <h5 class="card-header aqua-gradient white-text text-center py-4">
                        <strong>Be a tutor</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        <!-- Form -->
                        <form class="text-center" method="POST" style="color: #757575;" action="tutorSignup.php" >
                        <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input name="full_name" type="text" id="materialRegisterFormFirstName" class="form-control">
                                        <label for="materialRegisterFormFirstName">Full Name</label>
                                    </div>
                                </div>
                              
                            </div>
        <div class="form-row">

        <div class="md-form" style="margin-right: 250px;">
            <div class="md-form input-group">
               <div class="input-group-prepend">
                  <span class="input-group-text md-tabs">Date of birth</span>
               </div>
                  <input placeholder="Date of birth" type="date" id="date-picker-example" class="form-control datepicker">
                  <label for="date-picker-example"></label>
  
            </div>
        </div>
        <div class="form-row">
    <div class="col"> <!-- Last name -->
 <div class="md-form">
                                        <input name="username" type="text" id="materialRegisterFormLastName" class="form-control">
                                        <label for="Form-pass4">Address</label>                                    </div>
                                </div>
        
            
        </div>
        <div class="form-row">
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
        <div class="input-group mb-3" >
          <select class="browser-default custom-select"  style="margin-right: 250px;" id="inputGroupSelect01">
            <option selected>Gender</option>
            <option value="1">Female</option>
            <option value="2">Male</option>
          </select>
        </div></div></div></div>
        <div class="form-row">
                                <div class="col">
                                    <!-- Last name -->
                       zh             <div class="md-form">
            <input type="email" id="Form-pass4" class="form-control">
            <label for="Form-pass4"> Email</label>
            
        </div>      
        </div>      
        </div>      
        </div>
        
        <!-- <div class="md-form" style="margin-right: 250px;" >
            <input type="text" id="Form-pass4" class="form-control">
            <label for="Form-pass4">Address</label>
            
        </div> -->
        <div class="form-row">
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
          <div class="input-group mt-4" >
          <select class="browser-default custom-select"  style="margin-right: 250px;" id="inputGroupSelect01">
            <option selected>Education Status</option>
            <option value="1">Diploma</option>
            <option value="2">BSc</option>
            <option value="3">MSc</option>
            <option value="3">PHd</option>
          </select>
        </div></div></div></div>
        <div class="form-row">
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
        <div class="input-group mt-4" >
          <select class="browser-default custom-select"  style="margin-right: 250px;" id="inputGroupSelect01">
            <option selected>Work Exprience</option>
            <option value="1">0 yrs</option>
            <option value="2">1-5 yrs</option>
            <option value="3">5-10yrs</option>
            <option value="3">above 10yrs</option>
          </select>
        </div></div></div></div>
        <div class="form-row">
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
        <div class="form-group mt-4">
           <label for="Form-pass4">Story About Yourself (150 words)</label>
           <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
        </div>
        </div></div></div>
        <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input name="phone" type="text" id="materialRegisterFormFirstName" class="form-control">
                                        <label for="materialRegisterFormFirstName">Phone Number</label>
                                    </div>
                                </div>
                              
</div>
        
        <div class="input-group mt-4">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
</div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01"
          aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label"    style="margin-right: 250px;" for="inputGroupFile01">Choose Photo</label>
    </div>
        </div>
        
        <div class="form-row">
    <div class="col"> <!-- Last name -->
 <div class="md-form">
                                        <input name="password" type="password" id="materialRegisterFormLastName" class="form-control">
                                        <label for="materialRegisterFormLastName">Password</label>
                                    </div>
                                </div>
                                </div>
                          
        <div class="custom-control custom-checkbox mt-4">
            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
            <label class="custom-control-label" for="defaultUnchecked">I agree to</label>
            <a target="_blank" href="/terms-and-conditions/">Terms and conditions</a>
        </div>

        <!-- <div class="text-center mt-4">
            <button type="submit" class="btn btn-dark z-depth-2">Register</button>
        </div> -->
        <button name="btnSignup" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>
                            <p style="color:green;"><?php echo $output;?></p>
        <p class="font-small grey-text d-flex justify-content-center mt-3">Already have account? <a href="tutorLogin.php" class="font-weight-bold ml-1" style="color: black">Log In</a></p>
</form>
                        <!-- Form -->

                    </div>

                    </div>
                    <!-- Material form register -->
                    </div>

                </div>
            </div>
        </div> 
        
        </div>
        <!-- Material form login -->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

    </body>
</html>
