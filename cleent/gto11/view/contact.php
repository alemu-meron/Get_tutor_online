<?php
include_once ('./template/navBar.php');
    $output = "";
    if(isset($_POST['btnContact'])){
        include_once('../controller/dbcontroller.php');
        include_once('../model/contact.php');
        $contact = new Contact(0,$_POST['Name'],$_POST['Email'],$_POST['Phone'],$_POST['ContactReason'],$_POST['Message']);
        $dbcontroller = new dbcontroller();
      $output = $dbcontroller->addContact($contact);
        if($output){
            $message = "thank you for your comment";
echo "<script type='text/javascript'>alert('$message');  header('Location: contact.php');</script>";
        }else{           
        $output = "Invalid information try again";
        }
    }
    
?>
<style>
  

body {
    line-height: 1;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}
:focus {
    outline: 0;
}

ins {
    text-decoration: none;
}

del {
    text-decoration: line-through;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}



body {
    font-size: 12px;
    line-height: 18px;
    color: #666;
    background: #fff;
    font-family: Arial, Helvetica, 'Helvetica Neue', Verdana, sans-serif;
}

.wrapper {
    width: 960px;
    margin: 40px auto;
    padding: 24px;
}

h3 {
    font-size: 16px;
    margin-bottom: 12px;
    color: #444;
}



#contact-wrapper {
    position: relative;
    display: block;
}

.form-wrapper {
    float: left;
    width: 500px;
    position: relative;
}

.address-wrapper {
    float: left;
    width: 400px;
    position: absolute;
    right: 0;
    top: 0;
    color: #999;
    background: #fff;
    margin-top: 60px;
}


#contact-wrapper h2 {
    font-size: 30px;
    line-height: 1.2;
    margin: 9px 0;
    letter-spacing: -1px;
    color: #333;
    font-weight: bold;
}

#contact-wrapper h2.success {
    color: #5791fc;
}

p.success {
    font-size: 16px;
    color: #666;
}

#map-outer {
    width: 260px;
    height: 200px;
    padding: 6px;
    border: 1px solid #ccc;
    clear: both;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-box-shadow: 0 0 6px #ddd;
    -webkit-box-shadow: 0 0 6px #ddd;
    float:right;
    
}

#map {
    width: 260px;
    height: 200px;
    float: right;

}

#map-big {
    width: 912px;
    height: 312px;
    float: right;
}

.street-address {
    font-size: 14px;
    line-height: 1.3;
    letter-spacing: -.5px;
    margin: 9px 0;
    color: #888;
    font-weight: bold;
    text-align: right;
    text-transform: uppercase;
    margin-bottom: 12px;
    width: 100%;
}

.directions-form {
    display: none;
    clear: both;
    padding: 12px 0;
    height: 60px;
}

.directions-form ul {
    width: 100%;
    margin-bottom: 12px;
}

.directions-form li {
    width: 441px;
    display: block;
    float: left;
}

.directions-form input, .directions-form select {
    padding: 4px 8px;
    font-size: 12px;
    line-height: 1.2;
}

.directions-form input {
    width: 425px;

}

.directions-form li:first-child {
    margin-right: 10px;
}

.directions-form li:last-child {
    margin-left: 18px;
}

.directions-form .filters{
    margin-bottom:12px;
}

.dir-label {
    color: #444;
    font-weight: bold;
    margin-bottom: 3px;
}

.directions-form select {
    width: 20%;
    display: block;
    float: left;
    margin-right: 12px;
}

#get-directions {
    background: none repeat scroll 0 0 #CCCCCC;
    color: #444444;
    display: block;
    float: right;
    height: 30px !important;
    padding: 6px;
    text-shadow: 1px 1px 0 #EEEEEE;
    width: 100px;
}

#get-directions:focus {
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
}

.directions {
    clear: both;
    display: none;
}

#dir-container {
    display: none;
    clear: both !important;
}

.get-directions-button, .submit input {
    width: 260px;
    text-align: center;
    padding: 6px;
    color: #aaa;
    font-size: 14px;
    text-decoration: none;
    background-color: #f1f1f1;
    background: -webkit-gradient(linear, left top, left 30, f

Lab, [10.08.19 10:50]
rom(#f1f1f1), color-stop(4%, #ffffff), to(#f4f4f4));
    background: -moz-linear-gradient(top, #f1f1f1, #ffffff 1px, #f4f4f4 30px);
    border: 1px solid #dadada;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-box-shadow: 0px 1px 4px #ddd;
    -moz-box-shadow: 0px 1px 4px #ddd;
    text-shadow: 1px 1px 0px #fff;
    display: block;
    margin: 12px 0;
    text-align: center;
    cursor: pointer;
    float:right;
}

.submit input{
    padding: 6px 3px;
    margin-right:5px;
    height: 36px;
    cursor: pointer;
    width: 96px;
    -webkit-box-shadow:none;
    -moz-box-shadow: none;
    background: -webkit-gradient(linear, left top, left 30, from(#f1f1f1), color-stop(4%, #ffffff), to(#f4f4f4));
    background: -moz-linear-gradient(top, #f1f1f1, #ffffff 1px, #f4f4f4 30px);
    border: 1px solid #ccc;
    font-weight:bold;
    color:#666;
}

#company-street-address{
    display:none;
}

input, textarea, select {
    font: 16px/24px Helvetica Neue, "Arial", Helvetica, Verdana, sans-serif;
    width: 335px;
    padding: 8px 6px;
    margin: 0;
    color: #999999;
    text-shadow: 0 0 1px #FFFFFF;
    border: 1px solid #ddd;
    outline: none;
    display: inline-block;
    position: relative;
    z-index: 2;
    background: -webkit-gradient(linear, left top, left 15, from(#FFFFFF), color-stop(4%, #f4f4f4), to(#FFFFFF));
    background: -moz-linear-gradient(top, #FFFFFF, #f4f4f4 1px, #FFFFFF 15px);
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-transition: .3s ease-in-out;
    -moz-transition: .3s ease-in-out;
}

input {
    height: 16px;
}

select {
    width: 348px;
    padding: 6px 6px;
}

textarea {
    width: 335px;
    overflow: hidden;
    background: -webkit-gradient(linear, left top, left 15, from(#FFFFFF), color-stop(4%, #f4f4f4), to(#FFFFFF));
    background: -moz-linear-gradient(top, #FFFFFF, #f4f4f4 1px, #FFFFFF 15px);

}

input:focus, textarea:focus, select:focus {
    -webkit-box-shadow: 0px 0px 5px #007eff;
    -moz-box-shadow: 0px 0px 5px #007eff;
    box-shadow: 0px 0px 5px #007eff;
}



.field {
    margin: 18px 0;
    position: relative;
    width: 490px;
    clear:both;
}

label {
    display: block;
    width: 118px;
    padding:0 18px 0 0;
    float: left;
    color: #666;
    text-align: right;
    font: 16px/24px Helvetica Neue, "Arial", Helvetica, Verdana, sans-serif;
}

.error, .tooltip {
    height: 16px;
    width: 186px;
    background-color: #FFCFCF;
    border: 1px solid #E5A3A3;
    font: 11px/16px Helvetica Neue, "Arial", Helvetica, Verdana, sans-serif;
    color: #801B1B;
    padding: 8px 2px 8px 8px;
    margin-left: -2px;
    border-radius: 0 9px 9px 0;
    -moz-border-radius: 0 9px 9px 0;
    -webkit-border-radius: 0 9px 9px 0;
    -moz-box-shadow: 0 0 6px #ddd;
    -webkit-box-shadow: 0 0 6px #ddd;
    z-index: 999;
}

.error{
    z-index:9999;
}

.error span, .tooltip span{
    width:186px;
    display:block;
}

.tooltip {
    background: #F2F2F2;
    border-color: #DBDBDB;
    color: #666;
}

.overlay {
    display: none;
    z-index: 10000;
    background-color: #fff;
    width: 912px;
    padding: 24px;
    min-height: 200px;
    border: 1px solid #666;
    background: -webkit-gradient(linear, left top, left 30, from(#f1f1f1), color-stop(4%, #ffffff), to(#f4f4f4));
    background: -moz-linear-gradient(top, #f4f4f4, #ffffff 1px, #f4f4f4 95%);
    border: 1px solid #dadada;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-box-shadow: 0px 1px 4px #ddd;
    -moz-box-shadow: 0px 1px 4px #ddd;
}


.overlay .close:before {
    content: 'X';
}

.overlay .close {
    background: #eee;
    border-radius: 17px;
    -moz-border-radius: 17px;
    -webkit-border-radius: 17px;
    border: 1px solid #AAAAAA;
    cursor: pointer;
    height: 23px;
    padding-top: 5px;
    position: absolute;
    right: -15px;
    text-align: center;
    top: -15px;
    width: 29px;
}

#exposeMask{
    position:fixed !important;
}

.clear {
    clear: both;
    display: block;
    overflow: hidden;
    visibility: hidden;
    width: 0;
    height: 0;
}
.clearfix:after {
    clear: both;
    content: ' ';
    display: block;
    font-size: 0;
    line-height: 0;
    visibility: hidden;
    width: 0;
    height: 0;
}
* html .clearfix,
*:first-child+html .clearfix {
    zoom: 1;
}
        body{
            background:#fafafa;
        }

        .wrapper{
            
            padding:36px;
            border:1px solid #ddd;
            border-radius:6px;
            -moz-border-radius:6px;
            -webkit-border-radius:6px;
            background:#fff;
            min-height:450px;
        }
        .wrapper clearfix{
            margin: 0% 40% 5% 5%;
        }
        
       
    </style>
<body>


<script>var companyAddress = 'Atlanta GA';</script>

<div class="wrapper clearfix">

    <div id="contact-wrapper" class="clearfix">

        <div class="form-wrapper clearfix">

            <h2 align-content>Contact Us</h2>

            <div class="message">
                        </div>

            <form id="contact-form" action="contact.php" method="post" novalidate>

  <div class="form-group row">
    <!-- Default input -->
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" name="Name" class="form-control" id="inputPassword3" placeholder="insert Name ">
    </div>
  </div>
  <div class="form-group row">
    <!-- Default input -->
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" namae="Email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
 <div class="form-group row">
    <!-- Default input -->
    <label for="Name" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
        <input type="number" name="Phone" class="form-control" id="inputPassword3" placeholder="Phone number">
    </div>
  </div>
       <div class="field">
                        <label for="contact_reason" class="col-sm-2 col-form-label" >Reason</label>
                        <select id="contact_reason" name="ContactReason" required="required" type="text" placeholder="reason of contact" >
                            <option>About the service</option>
                            <option>About promotion</option>
                            <option>Other</option>
                        </select>
                    </div>
  <div class="form-group row">
    <!-- Default input -->
    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
          <div class="field">
                        <label for="message" class="col-sm-2 col-form-label">Message</label>
                        <textarea id="message" name="Message" cols="15" rows="5" required="required" type="text"
                                ></textarea>
                    </div>
   <button name="btnContact" type="submit" class="btn btn-black">submit</button>
  </div>
</form>
        </div></div></div>

</body>
<?php
    include_once ('./template/footer.php');
?>

