<?php
     include_once '../controller/dbconn.php';
     $conn=connect();
//     $variable = "<script>document.writeln(id);</script";
        session_start();
        $N_id=$_SESSION['N_id'];

     
     $query="SELECT * FROM `tutor` JOIN tutor2 ON tutor2.tutor_id=tutor.tutorId where tutor.tutorId='".$N_id."'";
     $result=  mysqli_query($conn, $query);
     $query3="SELECT * FROM `tutor` JOIN highschoolcourses ON tutor.tutorId=highschoolcourses.tutor_id JOIN kgcourses  ON tutor.tutorId=kgcourses.tutor_id JOIN elemntarycourses ON tutor.tutorId=elemntarycourses.tutor_id WHERE tutor.tutorId='".$N_id."'";
     $result3=  mysqli_query($conn, $query3);
     
     
        ?>

<?php 
    if(isset($_POST['commBtn'])){
        $cId = $_SESSION['id'];
        $query = "INSERT INTO rate VALUES(0,'$cId','$N_id','$_POST[rate]','$_POST[comment]')";
        mysqli_query($conn, $query) or die(mysqli_error($conn));
    }
    $query = "SELECT * FROM rate,client WHERE Clientid=cliId AND tuId ='$N_id'";
    $rateResult = mysqli_query($conn, $query);
    $commentResult = mysqli_query($conn, $query);
    $rate = 0;
    $count = 0;
    while($row = mysqli_fetch_array($rateResult)){
        $rate += $row['value'];
        $count +=1;
    }
    if($count > 0){
        $rate = round($rate/$count);
    }
    
       
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="uni/css/bootstrap.css">
    <link rel="stylesheet" href="uni/css/animate.css">
    <link rel="stylesheet" href="uni/css/owl.carousel.min.css">

    <link rel="stylesheet" href="uni/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="uni/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="uni/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="uni/css/magnific-popup.css">
    <link rel="stylesheet" href="uni/css/style.css">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" id="bootstrap-css">
  
 
     <body>
        <header role="banner">       
       <nav class="navbar navbar-expand-lg navbar-left bg-light">
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
              
                  <ul class="navbar-nav absolute-right">
          <!-- <li class="nav-item dropdown"> -->
          <a class="nav-link" href="logout.php" id="navbarDropdownMenuLink"
          aria-haspopup="true" aria-expanded="false">Log out</a>
       
          </li> 
    </ul>
         </div>
        </div>
      </nav>
    </header>
<section class="my-5" style="margin-left: 200px; margin-right: 250px;">

  <input type="hidden" id="L_id" name="L_id"/>
  

<table  class="table table-borderless" id="data2" cellspacing="0">
                <thead>
                  
                </thead>
                <tbody>
           <?php while ($row=  mysqli_fetch_array($result)){ ?>
            <tr>
                <!--<td><?php echo $row[0];?></td>-->
                <td>
                    <div class="view overlay rounded z-depth-1 mb-4"style="width:400px; height: 300px">
                        <img class="img-fluid" style="width:400px; height:300px;" src="../Files/img/<?php echo $row[9];?>" alt="Sample image">
                    </div>
      
                    
                <div class="rate" style="margin-left:100px">
                    <input type="radio" value="5" <?php if($rate==5) echo 'checked';?>/>
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio"  value="4" <?php if($rate==4) echo 'checked';?>/>
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio"  value="3" <?php if($rate==3) echo 'checked';?>/>
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio"  value="2" <?php if($rate==2) echo 'checked';?>/>
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" value="1" <?php if($rate==1) echo 'checked';?>/>
                    <label for="star1" title="text">1 star</label>
                    
                </div>
                    
      
        <h5 class="mr-5"  style="margin-left:100px"><?php echo $row[4]?></h5>
       <!--<button type="button" class="btn btn-black" style="margin-left:100px">Send Message Now</button>-->
     
    <div class="all">

    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog cascading-modal" role="document">
       <!--Content-->
       <form method="post" action="../send_mail2.php">
           
    <div class="modal-content">
       <div class="modal-header black darken-3 white-text">
        <h4 class="title"><i class="fas fa-pencil-alt"></i> Send Email To Tutor</h4>
        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mb-0">
        <div class="md-form form-sm">
          <i class="fas fa-envelope prefix active"></i>
          <input type="email" name="mail_to" id="form9" class="form-control">
          <label for="form8" class="active"><strong>Email to</strong></label>
        </div>
          
        <div class="md-form form-sm">
          <i class="fas fa-lock prefix active"></i>
          <input type="text" name="mail_sub" id="form9" class="form-control">
          <label for="form9" class="active"><strong>Subject</strong></label>
        </div>

        <div class="md-form form-sm">
          <i class="fas fa-pencil-alt prefix"></i>
          <textarea type="text" name="mail_msg" id="form67" class="md-textarea mb-0"></textarea>
          <label for="form67"><strong>Your message</strong></label>
        </div>
 <button class="btn black darken-3 white-text  btn-block" type="submit">Send</button>
           </div>
     </div>
    </form>
</div>
                </div>
<div class="text-center">
  <a href="" class="btn black darken-3 white-text mr-5 btn-rounded my-3" data-toggle="modal" data-target="#modalContactForm">Send Email to Tutor Now</a>
</div>
      
      
      
      
      </div>
 
    </td>
    
    <td>
                <h6 style="margin-left:700px;"></h6>
         
                
         <h5 class="font-weight-bold mb-3"  style="font-size:20px">Name: <?php echo $row[1]?></h5>
         
          <h5 class="font-weight-bold mb-3"  style="font-size:20px">About Me</h5>
          <p class="black-text"  style="font-size:20px"> <?php echo $row[8]?>
          </p>
          
          <br/>
          <h5 class="font-weight-bold mb-3">Education</h5>
          <h6 class="" style="font-size:20px"><?php echo $row[11]?> </h6>
          <h6 class=""  style="font-size:20px"><?php echo $row[13]?> </h6>
          
          <br/>
          <h5 class="font-weight-bold mb-3">Pay Per Hour</h5>
          <h6 class="" style="font-size:20px"><?php echo $row[14]?>Birr</h6>
        <?php }?>  
          <h5 class="font-weight-bold mb-3">I Tutor</h5>
          <?php
            $query="SELECT * FROM kgcourses WHERE tutor_id = '$N_id'";
            $result=  mysqli_query($conn, $query);
            $kgrow = mysqli_fetch_array($result);
            
            //elementary
            $query="SELECT * FROM elemntarycourses WHERE tutor_id = '$N_id'";
            $result=  mysqli_query($conn, $query);
            $elemrow = mysqli_fetch_array($result);
            
            //highschool
            $query="SELECT * FROM highschoolcourses WHERE tutor_id = '$N_id'";
            $result=  mysqli_query($conn, $query);
            $highrow = mysqli_fetch_array($result);?>
          
            <!--kg-->
            <?php if($kgrow['english'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['english'];?></button>
            <?php  }?>
            <?php if($kgrow['maths'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['maths'];?></button>
            <?php  }?>
            <?php if($kgrow['science'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['science'];?></button>
            <?php  }?>
            <?php if($kgrow['art'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['art'];?></button>
            <?php  }?>
            <?php if($kgrow['music'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $kgrow['music'];?></button>
            <?php  }?>
            <!--elementary-->
            <?php if($elemrow['english'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['english'];?></button>
            <?php  }?>
            <?php if($elemrow['maths'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['maths'];?></button>
            <?php  }?>
            <?php if($elemrow['science'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['science'];?></button>
            <?php  }?>
            <?php if($elemrow['biology'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['biology'];?></button>
            <?php  }?>
            <?php if($elemrow['physics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['physics'];?></button>
            <?php  }?>
            <?php if($elemrow['chemistry'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['chemistry'];?></button>
            <?php  }?>
            <?php if($elemrow['social'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['social'];?></button>
            <?php  }?>
            <?php if($elemrow['civics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['civics'];?></button>
            <?php  }?>
            <?php if($elemrow['IT'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $elemrow['IT'];?></button>
            <?php  }?>
            <!--High School-->
            <?php if($highrow['english'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['english'];?></button>
            <?php  }?>
            <?php if($highrow['maths'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['maths'];?></button>
            <?php  }?>
            <?php if($highrow['economics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['economics'];?></button>
            <?php  }?>
            <?php if($highrow['biology'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['biology'];?></button>
            <?php  }?>
            <?php if($highrow['physics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['physics'];?></button>
            <?php  }?>
            <?php if($highrow['chemistry'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['chemistry'];?></button>
            <?php  }?>
            <?php if($highrow['civics'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['civics'];?></button>
            <?php  }?>
            <?php if($highrow['IT'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['IT'];?></button>
            <?php  }?>
            <?php if($highrow['business'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['business'];?></button>
            <?php  }?>
            <?php if($highrow['geography'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['geography'];?></button>
            <?php  }?>
            <?php if($highrow['history'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['history'];?></button>
            <?php  }?>
            <?php if($highrow['drawing'] != ""){ ?>
            <button class="btn btn-sm blue-text btn-light"><?php echo $highrow['drawing'];?></button>
            <?php  }?>
            </td>
        </tr>
</table>
    <!--comment-->
  <div class="comment" style="margin-right: 250px">
  <hr>
  <h5 class="mt-0 font-weight-bold text-dark">Comments</h5>
  <hr>
   <?php while($row = $commentResult->fetch_assoc()){ ?>
        <div class="media mb-3">
        <div class="media-body ">
        <h5 class="mt-0 font-weight-bold blue-text"><?php echo $row['Fullname'] ;?></h5>
          <?php echo $row['comment'] ;?>
        </div>
          </div>
    <?php } ?>


  <form method = "POST" action = "tutorPage.php">
        <p class="lead ml-2">Rate Me</p>
        <div class="rate">
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
        </div><br/>
        <div class="form-group">
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button name="commBtn" type="submit" class="btn btn-black">Rate</button>
    </form>
  </div>
    
    
</section>
                
        
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
<script>
    $(window).on('load', function() {
     var id=sessionStorage.getItem('page1');
//     window.location.href="tutorPage.php?uid="+id;
     document.getElementById('L_id').value=id;
     var profile_viewer_uid = 1;

});
</script>
</html>