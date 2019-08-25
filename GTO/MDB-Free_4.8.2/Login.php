<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
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

<body>
        
    <form class="form-gradient" action="./Home" method= "post">

<!--Form with header-->
<div class="card" style="margin: 50px 500px 100px 500px">

    <!--Header-->
    <div class="header pt-3 blue-grey" >

        <div class="row d-flex justify-content-center">
            <h3 class="white-text mb-3 pt-3 font-weight-bold">Log in</h3>
        </div>

        <div class="row mt-2 mb-3 d-flex justify-content-center">
            <!--Facebook-->
            <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f white-text fa-lg"> </i></a>
            <!--Twitter-->
            <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter white-text fa-lg"> </i></a>
            <!--Google +-->
            <a class="fa-lg p-2 m-2 gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg"> </i></a>
        </div>

    </div>
    <!--Header-->

    <div class="card-body mx-4 mt-4">

        <!--Body-->
        
            <div class="md-form pb-1 pb-md-3">
              <input type="text" placeholder="username" name="user"/></br></br>
            
        </div>  
        
        <div class="md-form">
           <input type="password" placeholder="password" name="pass"/><br/>
        </div>

       

        <!--Grid row-->
        <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="col-md-1 col-md-5 d-flex align-items-start">
                <div class="text-center">
                    <button class="btn btn-grey btn-rounded z-depth-1a">Log in</button>
                </div>
            </div>
            <!--Grid column-->

           
        </div>
        <!--Grid row-->
    </div>

</div>
<!--/Form with header-->

</form>
        

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
