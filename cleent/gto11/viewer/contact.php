<?php
    $output = "";
    if(isset($_POST['btnContact'])){
        include_once('../controller/dbcontroller.php');
        include_once('../model/contact.php');
        $contact = new Contact(0,$_POST['Name'],$_POST['Email'],$_POST['Phone'],$_POST['ContactReason'],$_POST['Message']);
        $dbcontroller = new dbcontroller();
      $output = $dbcontroller->addContact($contact);
        if($output){
            header('Location: reg.html');
        }else{           
        $output = "Invalid email/Password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
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

/* remember to define focus styles! */
:focus {
    outline: 0;
}

/* remember to highlight inserts somehow! */
ins {
    text-decoration: none;
}

del {
    text-decoration: line-through;
}

/* tables still need 'cellspacing="0"' in the markup */
table {
    border-collapse: collapse;
    border-spacing: 0;
}

/ Styles */

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

/ Contact Form /

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
/ Form Styles **/
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

Lab, [10.08.19 10:50]
/* `Clear Floated Elements
----------------------------------------------------------------------------------------------------*/

/* http://sonspring.com/journal/clearing-floats */

.clear {
    clear: both;
    display: block;
    overflow: hidden;
    visibility: hidden;
    width: 0;
    height: 0;
}

/* http://perishablepress.com/press/2009/12/06/new-clearfix-hack */

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

/*
  The following zoom:1 rule is specifically for IE6 + IE7.
  Move to separate stylesheet if invalid CSS is a problem.
*/
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
       
    </style>
<body>


<script>var companyAddress = 'Atlanta GA';</script>

<div class="wrapper clearfix">

    <div id="contact-wrapper" class="clearfix">

        <div class="form-wrapper clearfix">

            <h2>Contact Us</h2>

            <div class="message">
                        </div>

            <form id="contact-form" action="contact.php" method="post" novalidate>

                <fieldset>

                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="Name" autofocus required="required"
                               title="Your first and last name">
                    </div>

                    <div class="field" title="sadfsadf">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="Email" required="required" title="We will respond to this address">
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="Phone" title="If you prefer a phone call">
                    </div>

                    <div class="field">
                        <label for="contact_reason">ContactReason</label>
                        <select id="contact_reason" name="ContactReason" required="required type="text">
                            <option>About the service</option>
                            <option>About promotion</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="field">
                        <label for="message">Message</label>
                        <textarea id="message" name="Message" cols="15" rows="5" required="required" type="text"
                                ></textarea>
                    </div>
                    <button name="btnContact" type="submit" class="btn">submit</button>
               

                </fieldset>

            </form>
        </div></div></div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
