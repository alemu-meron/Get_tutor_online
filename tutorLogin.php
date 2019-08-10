<?php
    $output = "";
    if(isset($_POST['btnLogin'])){
        include_once('../Controller/AccountController.php');
        $accountController = new AccountController();
        // $id_tutor','$full_name','$date_of_birth','$address',
        // '$gender','$email','$education_status','$experiance',
        // '$self_discription','$phone','$photo','$password')";
       
        $output = $accountController->studentLogin($_POST['username'],$_POST['password']);
        if($output){
            header('Location: ../pages/home.php');
        }else{
            $output = "Invalid Username/Password";
        }
    }
?>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">  
    </head>
    <style>
    body     {
    background-image:url('3.jpg');
}

   
   
</style>
    <body>     
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4 mt-5">
                    <!-- Material form login -->
                    <div class="card">

                        <h5 class="card-header aqua-gradient white-text text-center py-4">
                        <strong>Login</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" method="POST" style="color: #757575;" action="studentLogin.php">

                            <!-- Email -->
                            <div class="md-form">
                            <input type="email" name="email" id="materialLoginFormEmail" class="form-control">
                            <label for="materialLoginFormEmail">email</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                            <input name="password" type="password" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">Password</label>
                            </div>

                            <div class="d-flex justify-content-around">
                            </div>

                            <!-- Sign in button -->
                            <button name="btnLogin" class="btn btn-outline-info btn-rounded btn-block my-4 black z-depth-0" type="submit">Login</button>
                            <p style="color:red;"><?php echo $output;?></P>
                            <!-- Register -->
                            <p>Not a member?
                            <a href="./tutorSignup.php">Signup</a>
                            </p>
                            </form>
                            <!-- Form -->

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
