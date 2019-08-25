<?php
    $output = "";
    if(isset($_POST['btnComment'])){
        include_once('../controller/dbcomment.php');
                include_once('../model/comment.php');
        $dbcomment = new dbcomment();
     $tutor = new Comment(0,$_POST['Name'],$_POST['Comment']);
        $output = $dbcomment->addcomment($comment);
        if($output){
            header('Location: home.php');
        }else{
            $output = "Invalid email insert correct data";
        }
             
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta httpPUBLIC-equiv="content-type" content="text/html"; charset="iso-8859-1" />
        <meta name="äutor" content=""Help"/>
              <title>comment box</title>
    </head>

    <body>
<!--        <form action="sendcomment.php" method="post">
            <table>
            <tr><td>Name: </td><td><input type="text" name="Name"/></td></tr>
            <tr><td colspan="2">Comment: </td></tr>
            <tr><td colspan="2"><textarea name="Comment"></textarea></td></tr>
            <tr><td colspan="2"><input type="submit" name="submit" value="Comment"/></textarea></td></tr>
              <button name="btnComment" class="btn btn-black" type="submit" >Submit</button>
            </table>
        </form>-->
<form class="text-center" method="POST" style="color: #757575;" enctype="multipart/form-data" action="sendcomment.php">
    <!--Header-->
  
    <div class="card-body mx-4 ">

        <!--Body-->
        <div class="md-form" style="margin-right: 250px;">
            <label for="Form-email4">Enter your Name</label>
            <input  name= "Name" type="text" id="Form-email4" class="form-control"></br></br>
<!--            <label for="Form-email4">Enter your Name</label>-->
        </div>
        <div class="form-group mt-4"> </br>
           <label for="Form-pass4">Write your Comment</label>
           <textarea name="Comment" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
        </div>
<!--                <div class="md-form" style="margin-right: 250px;" >
            <input name="Comment" type="text" id="Form-pass4" class="form-control">
            <label for="Form-pass4"> Comment</label>
            
        </div>-->
                    <button name="btnComment" type="submit" class="btn btn-primary">Register</button>
               <!--<a href="tutorSignUp.php" class="btn btn-primary">Register now</a>-->
            <p style="color:green;"><?php echo $output;?></p>
        </div>
                <!--<p class="font-small grey-text d-flex justify-content-center mt-3">Already have account? <a href="tutorLogin.php" class="font-weight-bold ml-1" style="color: black">Log In</a></p>-->


    </form>
    </body>
</html>