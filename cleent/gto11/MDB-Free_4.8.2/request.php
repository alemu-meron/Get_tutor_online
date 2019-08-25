<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
    </head>
   
          <body class ="homebody" style="background-color: white">
              
          <nav class="navbar navbar-expand-lg navbar-dark blue-grey" style="margin: 10px 10px 10px 10px;">
          
       
  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
        </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
         
        <a class="nav-link" href="./Home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./About">About</a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="./Request">Request <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./Setting">Setting</a>
      </li>
    </ul>
  </div>
</nav>  
        
     <div>   
           <form action="dbinsert.php" method="post">
              <div>
              
              
              <div class="card"  style="margin-left: 150px; margin-right: 350px; margin-bottom: 10px;">
                 <div class="md-form"  style="margin-left: 25px;">
                     <input placeholder="Selected date" type="date" id="date-picker-example" class="form-control datepicker"/>
  <label for="date-picker-example">Last class attended</label>
</div>
         </div> 
        <div class="form-group shadow-textarea" style="margin-left: 150px; margin-right: 350px; margin-bottom: 30px;">
       <label for="exampleFormControlTextarea6"> <h2>Reason</h2> </label>
       <textarea class="form-control z-depth-1" style="height: 200px;" id="exampleFormControlTextarea6" rows="3" placeholder="Write your reason here..."></textarea>

       
        </div>
  
  </div>
   <div class="card"  style="margin-left: 150px; margin-right: 350px; margin-bottom: 20px;">
    
         <h3> Request type</h3>
         <input type="radio" name="Request type" value="Gradtuate" >Gradtuate<br>
         <input type="radio" name="Request type" value="withdrawal" > Withdrawal<br>
  
       </div> 
   <button class="btn blue-grey btn-lg align"> Submit </button>
  </form>
              
 
</div> 
        <!-- Footer -->
<footer class="page-footer font-small blue-grey" style="margin: 10px 10px 10px 10px;" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> By Yewoineshet</a>
  </div>
  <!-- Copyright -->
  
  
</footer>
<!-- Footer -->
        
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
