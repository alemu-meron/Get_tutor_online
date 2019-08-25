<?php 
     include_once '../controller/dbconn.php'; 
    
     $conn=connect();
     $query="SELECT * FROM `tutor` JOIN tutor2 ON tutor2.tutor_id=tutor.tutorId";
     $result=  mysqli_query($conn, $query);
     
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->

  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="unicss/bootstrap.css">
    <link rel="stylesheet" href="uni/css/animate.css">
    <link rel="stylesheet" href="uni/css/owl.carousel.min.css">

    <link rel="stylesheet" href="uni/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="uni/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="unifonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="uni/css/magnific-popup.css">
    <link rel="stylesheet" href="uni/css/style.css">
  
     <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet" id="bootstrap-css">
  
    
  <style>
     td:nth-of-type(1) {
display: none;
}

 </style>
    </head>
    
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
              </li></ul>
             
    
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
  

      <body>
         <form action="../model/passtest.php" method="post" id="bb">
             <input type="hidden" id="N_id" name="N_id"/>
        <div  class="body mt-5 mb-5" style="margin-left:150px; margin-right: 150px;">  
            
            <table  class="table table-borderless" id="data2" cellspacing="0">
                <thead>
                  
                </thead>
                <tbody>
           <?php while ($row=  mysqli_fetch_array($result)){?>
            <tr>
            <?php
                  $query = "SELECT * FROM rate WHERE tuId ='$row[0]'";
                  $rateResult = mysqli_query($conn, $query);
                  $rate = 0;
                  $count = 0;
                  while($raterow = mysqli_fetch_array($rateResult)){
                      $rate += $raterow['value'];
                      $count +=1;
                  }
                  if($count > 0){
                      $rate = round($rate/$count);
                  }
                ?>
                <td><?php echo $row[0]; ?></td>
                <td>
                    
                    <div class="view overlay rounded z-depth-1 mb-4" style="width:300px; height: 200px; margin-left: 150px;">
                        <img class="img-fluid" style="width:300px; height:200px;" src="../Files/img/<?php echo $row[9];?>" alt="Sample image">
                    </div>
                </td>
            
                <td>
                    
                    <div class="" >
                    <h6 style="margin-left:700px;"  ></h6>
                    <h6 class="font-weight-bold"  style="font-size:20px"><?php echo $row[1]?></h6>
                    <h6 class="" style="font-size:20px"><?php echo $row[11]?></h6>
                    <h6 class="" style="font-size:20px"><?php echo $row[13]?></h6>
                    <h6 class="font-weight-bold" class="" style="font-size:20px">Birr <?php echo $row[14]?></h6>
                    
                 <div class="rate">
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
                    <br/>  <button class="btn btn-black btn-sm">See detail</button>
                  
                   
                   
                <?php }?>
                    </div>  
              </td> 
                 
            </tr>
                </tbody>
          </table>
            </form>
          
        <nav aria-label="Page navigation example">
                <ul class="pagination mt-5 pg-blue justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link">1</a></li>
                  <li class="page-item"><a class="page-link">2</a></li>
                  <li class="page-item"><a class="page-link">3</a></li>
                  <li class="page-item">
                    <a class="page-link">Next</a>
                  </li>
                </ul>
        </nav>
       </div>
        
    </body>
    
    
       <!-- SCRIPTS -->
       <!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script src="js/addons/rating.js"></script>
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

 
  <script>
        // Rating Initialization
    $(document).ready(function() {
      $('#rateMe4').mdbRate();

    });
  </script>
  <script>
      $(document).ready(function () {
          
$('#data2').DataTable();
$('.dataTables_length').addClass('bs-select');
});
 

  </script>
  <script>
 var row1=document.getElementById('data2'),rIndex;
 for(var i=0;i<row1.rows.length;i++){
     row1.rows[i].onclick=function (){
         rIndex=this.rowIndex;
//            console.log(rIndex);
           var name=this.cells[0].innerHTML;
           //sessionStorage.setItem("page1",name);
           document.getElementById('N_id').value=name;
         

     };
 }
//
                  </script>
  
</html>