 <?php
    include_once '../controller/dbconn.php';
     session_start();
     $pho=$_SESSION['pho'];
     $conn=connect();
     $query="select * from tutor where phoneno='".$pho."'";
     $result=  mysqli_query($conn, $query);
             
    
 
 
    $output = "";
    if(isset($_POST['regBtn'])){
          include_once('../Controller/KgController.php');
          include_once('../Controller/ElemntaryController.php');
          include_once('../Controller/GradeController.php');
          include_once('../Controller/HighSchoolController.php');
          include_once('../Controller/Tutor2Controller.php');
          
          include_once('../Model/Tutor2.php');
          include_once('../Model/TutorA.php');
          include_once('../Model/TutorB.php');
          include_once('../Model/TutorC.php');
          include_once('../Model/TutorD.php');
          
          $kgController = new KgController();
          $elemntaryController = new ElemntaryController();
          $highSchoolController = new HighSchoolController();
          $gradeController = new GradeController();
          $tutor2Controller = new Tutor2Controller();
          
          $target="../Files/doc/".basename($_FILES['cv']['name']);
          
//                 $_POST['elemntary']
                   //$_POST['highschool']
          if($_POST['kg_hidden'] == 1){
             if(!isset($_POST['english'])) $_POST['english'] ='';
             if(!isset($_POST['maths'])) $_POST['maths'] = "";
                if(!isset($_POST['science'])) $_POST['science'] = "";
                if(!isset($_POST['art'])) $_POST['art']= "";
                if(!isset($_POST['music'])) $_POST['music'] = "";
             
                $tutora = new TutorA(0,$_POST['english'],$_POST['maths'],$_POST['science'],$_POST['art'],$_POST['music']);  
               while ($row1=mysqli_fetch_array($result)){
                   $tutor2 = new Tutor2(0,$_POST['eduStatus'],$_POST['experience'],$_POST['school'],$_POST['pay'],$_FILES['cv']['name'],$row1[0]);
     
                   
            
                }
             $tutord = new TutorD(0,$_POST['kg'],0,0);
             $output = $gradeController->addTutorD($tutord);
             $output = $kgController->addTutorA($tutora);
             $output = $tutor2Controller->addTutor2($tutor2);
          }
            
            elseif ($_POST['elem_hidden']) {
                
                if(!isset($_POST['english'])) $_POST['english'] = "";
                if(!isset($_POST['maths'])) $_POST['maths']= "";
                if(!isset($_POST['science'])) $_POST['science'] = "";
                if(!isset($_POST['civics'])) $_POST['civics'] = "";
                if(!isset($_POST['social'])) $_POST['social'] = "";
                if(!isset($_POST['biology'])) $_POST['biology'] = "";
                if(!isset($_POST['physics'])) $_POST['physics']= "";
                if(!isset($_POST['chemistry'])) $_POST['chemistry'] = "";
                if(!isset($_POST['computer'])) $_POST['computer'] = "";
                
               $tutorb = new TutorB(0,$_POST['english'],$_POST['maths'],$_POST['science'],$_POST['civics'],$_POST['social'],$_POST['biology'], $_POST['physics'], $_POST['chemistry'], $_POST['computer']);
              while ($row1=mysqli_fetch_array($result)){
               $tutor2 = new Tutor2(0,$_POST['eduStatus'],$_POST['experience'],$_POST['school'],$_POST['pay'],$_FILES['cv']['name'],$row1[0]);
              }
               $tutord = new TutorD(0, 0,$_POST['elemntary'],0);
             $output = $gradeController->addTutorD($tutord);
               $output = $elemntaryController->addTutorB($tutorb);
            $output = $tutor2Controller->addTutor2($tutor2); 
              
            }
           else {
               
                 if(!isset($_POST['maths'])) $_POST['maths']= "";
                if(!isset($_POST['computer'])) $_POST['computer'] = "";
                 if(!isset($_POST['english'])) $_POST['english'] = "";
                if(!isset($_POST['biology'])) $_POST['biology'] = "";
                if(!isset($_POST['physics'])) $_POST['physics']= "";
                if(!isset($_POST['chemistry'])) $_POST['chemistry'] = "";
                if(!isset($_POST['economics'])) $_POST['economics'] = "";
                if(!isset($_POST['business'])) $_POST['business'] = "";
                if(!isset($_POST['geography'])) $_POST['geography'] = "";
                if(!isset($_POST['history'])) $_POST['history'] = "";
                if(!isset($_POST['civics'])) $_POST['civics'] = "";
                if(!isset($_POST['drawing'])) $_POST['drawing'] = "";
               
               $tutorc = new TutorC(0,$_POST['maths'],$_POST['english'],$_POST['computer'],$_POST['biology'],$_POST['physics'],$_POST['chemistry'], $_POST['economics'], $_POST['business'], $_POST['geography'],$_POST['history'],$_POST['civics'],$_POST['drawing']);
                while ($row1=mysqli_fetch_array($result)){
               $tutor2 = new Tutor2(0,$_POST['eduStatus'],$_POST['experience'],$_POST['school'],$_POST['pay'],$_FILES['cv']['name'],$row1[0]); 
                }
               $tutord = new TutorD(0,0,0,$_POST['highschool']);
             $output = $gradeController->addTutorD($tutord);
                $output = $highSchoolController->addTutorC($tutorc);
             $output = $tutor2Controller->addTutor2($tutor2);
           }
//    $tutora = new TutorA(0,$_POST['english'],$_POST['maths'],$_POST['science'],$_POST['art'],$_POST['music']);
//    $tutorb = new TutorB(0,$_POST['english'],$_POST['maths'],$_POST['science'],$_POST['civics'],$_POST['social'],$_POST['biology'], $_POST['physics'], $_POST['chemistry'], $_POST['computer']);
//    $tutorc = new TutorC(0,$_POST['maths'],$_POST['english'],$_POST['computer'],$_POST['biology'],$_POST['physics'],$_POST['chemistry'], $_POST['economics'], $_POST['business'], $_POST['geography'],$_POST['history'],$_POST[civics],$_POST['drawing']);
//    $tutord = new TutorD(0,$_POST['gradeId'],$_POST['kg'],$_POST['elemntary'],$_POST['highschool']);
//    $tutor2 = new Tutor2(0,$_POST['eduStatus'],$_POST['school'],$_POST['pay'],$_POST['exprience'],$_FILES['cv']['name']);
    
//          $output = $kgController->addTutorA($tutora);
//          $output = $elemntaryController->addTutorB($tutorb);
//          $output = $highSchoolController->addTutorC($tutorc);
//          $output = $gradeController->addTutorD($tutord);
//          $output = $tutor2Controller->addTutor2($tutor2);
          
         move_uploaded_file($_FILES['cv']['tmp_name'], $target);
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
            <h2 class="black-text mt-3 mx-5">Register As A Tutor: Part 2</h2>
        </div>
      <div class="body mt-3 mb-3 justify-content-center" style="margin-left: 300px; margin-right: 300px; border-style: solid; border-width: 1px; border-color: black">
          <form class="text-center" method="POST" style="color: #757575;" enctype="multipart/form-data" action="tutorSignUp2.php">
    <!--Header-->
    
          <div class="input-group mt-4 ml-5" >
            <select name="eduStatus" class="browser-default custom-select"  style="margin-right: 250px;" id="inputGroupSelect01">
            <option selected>Education Status</option>
            <option value="Highschool">High School</option>
            <option value="Diploma">Diploma</option>
            <option value="Bachelor Degree">BSc</option>
            <option value="Masters Degree">MSc</option>
            <option value="Postgraduate Doctoral Degree">PHd</option>
          </select>
        </div>
    
         <div class="input-group mt-4 ml-5" >
            <select name="experience" class="browser-default custom-select"  style="margin-right: 250px;" id="inputGroupSelect01">
            <option selected>Work Exprience</option>
            <option value="0">0 yrs</option>
            <option value="1-5 yrs">1-5 yrs</option>
            <option value="5-10 yrs">5-10yrs</option>
            <option value="10yrs">above 10yrs</option>
          </select>
        </div>
    
         <div class="md-form ml-5" style="margin-right: 250px;" >
            <input name="school" type="text" id="Form-pass4" class="form-control">
            <label for="Form-pass4">Name of School, And Field of Study</label>  
        </div> 
    
    
    <div class=" mt-4 ml-5 input-group"><h6 class="pr-3 pt-1"><strong>Level to tutor</strong></h6>
          <div class="custom-control custom-checkbox custom-control-inline">
              <input name="kg" type="checkbox" class="custom-control-input kg" value="1" id="defaultInline1">
            <label class="custom-control-label" for="defaultInline1">Kindergarten</label>
          </div>

          <!-- Default inline 2-->
          <div class="custom-control custom-checkbox custom-control-inline">
              <input name="elemntary" type="checkbox" class="custom-control-input elemntary"  value="2"id="defaultInline2">
            <label class="custom-control-label" for="defaultInline2">Elementary</label>
          </div>

          <!-- Default inline 3-->
          <div class="custom-control custom-checkbox custom-control-inline">
              <input name="highschool" type="checkbox" class="custom-control-input high" value="3" id="defaultInline3">
            <label class="custom-control-label" for="defaultInline3">High School</label>
          </div>
    </div>
     
    <div class="ml-5 mr-5 mt-4">
    <div class="accordion" id="accordionExample275">
        <div class="card kg-subject z-depth-0 bordered">
          <div class="card-header" id="headingOne2">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2"
                aria-expanded="true" aria-controls="collapseOne2">
                Select kindergarten subjects to teach
              </button>
            </h5>
          </div>
            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
              data-parent="#accordionExample275">
              <div class="card-body">
              
                <div class="custom-control custom-checkbox">
                    <input name="english" type="checkbox" class="custom-control-input" value="KG-English" id="defaultUnchecked1">
                    <label class="custom-control-label" for="defaultUnchecked1">English</label>
                </div>  
                  
               <div class="custom-control custom-checkbox">
                   <input name="maths" type="checkbox" class="custom-control-input"  value="KG-Mathematics" id="defaultUnchecked2">
                    <label class="custom-control-label" for="defaultUnchecked2">Mathematics</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="science" type="checkbox" class="custom-control-input" value="KG-Science" id="defaultUnchecked3">
                    <label class="custom-control-label" for="defaultUnchecked3">Science</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="art" type="checkbox" class="custom-control-input" value="KG-Art" id="defaultUnchecked4">
                    <label class="custom-control-label" for="defaultUnchecked4">Art</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="music" type="checkbox" class="custom-control-input" value="KG-Music" id="defaultUnchecked5">
                    <label class="custom-control-label" for="defaultUnchecked5">Music</label>
                </div> 
              </div>
            </div>
        </div>
  
        
    <div class="card elemntary-subject z-depth-0 bordered">
      <div class="card-header" id="headingTwo2">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
           Select Elementary School Subjects to teach
          </button>
        </h5>
      </div>
      <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
        data-parent="#accordionExample275">
        <div class="card-body">
         
          
                 <div class="custom-control custom-checkbox">
                    <input name="english" type="checkbox" class="custom-control-input" value="Elementary-English" id="defaultUnchecked6">
                    <label class="custom-control-label" for="defaultUnchecked6">English</label>
                </div>
            
               <div class="custom-control custom-checkbox">
                   <input name="maths" type="checkbox" class="custom-control-input" value="Elementary-Mathematics" id="defaultUnchecked7">
                    <label class="custom-control-label" for="defaultUnchecked7">Mathematics</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="science" type="checkbox" class="custom-control-input" value="Elementary-Science" id="defaultUnchecked8">
                    <label class="custom-control-label" for="defaultUnchecked8">Science</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="civics" type="checkbox" class="custom-control-input" value="Civics And Ethical Education" id="defaultUnchecked9">
                    <label class="custom-control-label" for="defaultUnchecked9">Civics And Ethical Education</label>
                </div> 
            
                  <div class="custom-control custom-checkbox">
                      <input name="social" type="checkbox" class="custom-control-input" value="10" id="defaultUnchecked10">
                    <label class="custom-control-label" for="defaultUnchecked10">Social Studies</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="biology" type="checkbox" class="custom-control-input" value="Elementary-Biology" id="defaultUnchecked11">
                    <label class="custom-control-label" for="defaultUnchecked11">Biology</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="physics" type="checkbox" class="custom-control-input" value="Elementary-Physics" id="defaultUnchecked12">
                    <label class="custom-control-label" for="defaultUnchecked12">Physics</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="chemistry" type="checkbox" class="custom-control-input" value="Elementary-Chemistry" id="defaultUnchecked13">
                    <label class="custom-control-label" for="defaultUnchecked13">Chemistry</label>
                </div> 
                
                <div class="custom-control custom-checkbox">
                    <input name="computer" type="checkbox" class="custom-control-input" value="Elementary-IT" id="defaultUnchecked14">
                    <label class="custom-control-label" for="defaultUnchecked14">IT</label>
                </div> 
            
        </div>
      </div>
    </div>
        <!--<input type="text" name="selectbox" id="selectbox"/>-->
        <div class="card high-subject z-depth-0 bordered">
          <div class="card-header" id="headingThree2">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                Select high school subjects to teach
              </button>
            </h5>
          </div>
          <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2"
            data-parent="#accordionExample275">
            <div class="card-body">

                 <div class="custom-control custom-checkbox">
                     <input name="english" type="checkbox" class="custom-control-input" value="Highschool-English" id="defaultUnchecked15">
                    <label class="custom-control-label" for="defaultUnchecked15">English</label>
                </div>  
                  
               <div class="custom-control custom-checkbox">
                   <input name="maths" type="checkbox" class="custom-control-input" value="Highschool-Mathematics" id="defaultUnchecked16">
                    <label class="custom-control-label" for="defaultUnchecked16">Mathematics</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="english" type="checkbox" class="custom-control-input" value="Highschool-English" id="defaultUnchecked27">
                    <label class="custom-control-label" for="defaultUnchecked27">English</label>
                </div> 
                
                  <div class="custom-control custom-checkbox">
                      <input name="computer" type="checkbox" class="custom-control-input" value="Highschool-IT" id="defaultUnchecked17">
                    <label class="custom-control-label" for="defaultUnchecked17">IT</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="biology" type="checkbox" class="custom-control-input" value="Highschool-Biology" id="defaultUnchecked18">
                    <label class="custom-control-label" for="defaultUnchecked18">Biology</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="physics" type="checkbox" class="custom-control-input" value="Highschool-Physics" id="defaultUnchecked19">
                    <label class="custom-control-label" for="defaultUnchecked19">Physics</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="chemistry" type="checkbox" class="custom-control-input" value="Highschool-Chemistry" id="defaultUnchecked20">
                    <label class="custom-control-label" for="defaultUnchecked20">Chemistry</label>
                </div>  
                  
                  <div class="custom-control custom-checkbox">
                      <input name="economics" type="checkbox" class="custom-control-input" value="Highschool-Economics" id="defaultUnchecked21">
                    <label class="custom-control-label" for="defaultUnchecked21">Economics</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="business" type="checkbox" class="custom-control-input" value="Highschool-Business" id="defaultUnchecked22">
                    <label class="custom-control-label" for="defaultUnchecked22">Business</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="geography" type="checkbox" class="custom-control-input" value="Highschool-Geography" id="defaultUnchecked23">
                    <label class="custom-control-label" for="defaultUnchecked23">Geography</label>
                </div> 
                
                                  
                  <div class="custom-control custom-checkbox">
                      <input name="history" type="checkbox" class="custom-control-input" value="Highschool-History" id="defaultUnchecked24">
                    <label class="custom-control-label" for="defaultUnchecked24">History</label>
                </div> 
                  <div class="custom-control custom-checkbox">
                      <input name="civics" type="checkbox" class="custom-control-input" value="Civics and Ethical Education" id="defaultUnchecked25">
                    <label class="custom-control-label" for="defaultUnchecked25">Civics and Ethical Education</label>
                </div> 
                  
                  <div class="custom-control custom-checkbox">
                      <input name="drawing" type="checkbox" class="custom-control-input" value="Highschool-Technical Drawing" id="defaultUnchecked26">
                    <label class="custom-control-label" for="defaultUnchecked26">Technical Drawing</label>
                </div> 
           
            </div>
          </div>
        </div>
    </div>
    </div> 
    <input type="hidden" name="kg_hidden" id="kg_hidden"/>
    <input type="hidden" name="elem_hidden" id="elem_hidden"/>
    <input type="hidden" name="high_hidden" id="high_hidden"/>
    
        <div class="md-form ml-5" style="margin-right: 250px;" >
            <input name="pay" type="text" id="Form-pass5" class="form-control">
            <label for="Form-pass5">Pay Per Hour(In Birr)</label>  
        </div>
    
         <div class="input-group mt-4 ml-5">
          <div class="input-group-prepend">
              <span class="input-group-text"id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
              <input name="cv" type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label"    style="margin-right: 250px;" for="inputGroupFile01">Attach your CV</label>
          </div>
        </div>
    
        <div class="custom-control custom-checkbox mt-4">
            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
            <label class="custom-control-label" for="defaultUnchecked">I agree to</label>
            <a target="_blank" href="/terms-and-conditions/">Terms and conditions</a>
        </div>

        <div class="text-center mt-4">
            <button name="regBtn" id="regBtn" type="submit" class="btn btn-dark z-depth-2">Register</button>
            <p style="color:green;"><?php echo $output;?></p>
        </div>     
    
      </form>
      </div>

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
    $('input:checkbox[name=kg]').change(
   function(){
       if ($(this).is(':checked')) {
           document.getElementById('kg_hidden').value=$(this).val();
       }else{
           document.getElementById('kg_hidden').value="";
       }
   });
//   highschool
//elemntary
   $('input:checkbox[name=elemntary]').change(
   function(){
       if ($(this).is(':checked')) {
           document.getElementById('elem_hidden').value=$(this).val();
       }else{
           document.getElementById('elem_hidden').value="";
       }
   });
    $('input:checkbox[name=highschool]').change(
   function(){
       if ($(this).is(':checked')) {
           document.getElementById('high_hidden').value=$(this).val();
       }else{
           document.getElementById('high_hidden').value="";
       }
   });
</script>
<script>
       $(".kg-subject").hide();
       $('.kg').click(function() {
        if( $(this).is(':checked')) {
           $(".kg-subject").show();
        } else {
           $(".kg-subject").hide();
        }
       });
 </script>
 
 <script>
        $(".elemntary-subject").hide();
       $('.elemntary').click(function() {
        if( $(this).is(':checked')) {
           $(".elemntary-subject").show();
        } else {
           $(".elemntary-subject").hide();
        }
       });
</script>

<script>
        $(".high-subject").hide();
       $('.high').click(function() {
        if( $(this).is(':checked')) {
           $(".high-subject").show();
        } else {
           $(".high-subject").hide();
        }
       });
</script>

<script>
       $('#defaultUnchecked').click(function() {
        if( $(this).is(':checked')) {
           $("#regBtn").removeClass("disabled");
        } else {
           $("#regBtn").addClass("disabled");
        }
       });
</script>
</html>
