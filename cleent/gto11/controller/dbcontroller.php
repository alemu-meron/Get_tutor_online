<?php
class dbcontroller {
    private $Gender;
    private $Mobile;
    private $Address;
    private $Story;
    private $img;
    private $id;
    private $Name;
    private $Email;
    private $Phone;
    private $ContactReason;
    private $Message;
    private $Clientid;
    private $Fullname;
    private $Phonenumber;
    private $Password;
    private $Dateofbirth;
    private $mysqli;
    public function __construct(){
        include_once('db.php');
        $this->mysqli = connect();
    }
    public function clientLogin($Fullname,$Email,$Password){
        $query = "SELECT * FROM client_tbl WHERE Fullname= '$Fullname' AND Email = '$Email' AND Password = '$Password'";
        $result = $this->mysqli->query($query);
        if($result){
          $row = $result->fetch_assoc();
          if($row){
            session_start();
            $_SESSION['id'] = $row['Clientid'];
            $_SESSION['role'] = "client";
            return true;
          }
          else{
            return false;
          }
        }
    }
    public function addclient($client){
     $Clientid = $client->getClientid();
        $Fullname = $client->getFullname();
        $Phonenumber = $client->getPhonenumber();
        $Email = $client->getEmail();
        $Password = $client->getPassword();
        $Dateofbirth = $client->getDateofbirth();
        $query = "INSERT INTO client_tbl Values('$Clientid','$Fullname','$Phonenumber','$Email','$Password','$Dateofbirth')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully inserted";
        }else{
          return "Invalid/ERROR";
        }
    } 
    public function addContact($contact){
        $id = $contact->getId();
        $Name = $contact->getName();
        $Email = $contact->getEmail();
        $Phone = $contact->getPhone();
        $ContactReason = $contact->getContactReason();
        $Message = $contact->getMessage();
        $query = "INSERT INTO contact Values('$id','$Name','$Email','$Phone','$ContactReason','$Message')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully inserted";
        }else{
          return "Invalid/ERROR";
        }
    } 
    public function addsign($sign){
        $Fullname = $sign->getFullname();
        $Dateofbirth = $sign->getDateofbirth();
        $Gender = $sign->getGender();
        $Email = $sign->getEmail();
        $Mobile = $sign->getMobile();
        $Address = $sign->getAddress();
        $Story = $sign->getStory();
        $img = $sign->getimg();
        
        $query = "INSERT INTO tutor_sign Values('$Fullname','$Dateofbirth','$Gender','$Email','$Mobile','$Address','$Story','$img')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully inserted";
        }else{
          return "Invalid/ERROR";
        }
    } 
 }
?>



