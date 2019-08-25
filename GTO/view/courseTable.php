<?php
class AccountController{
    private $id;
    private $fullname;
    private $gender;
    private $email;
    private $phoneno;
    private $address;
    private $edu;
    private $exp;
    private $story;
    private $img;
    private $password;    
    public function __construct(){
        include_once ('db.php');
        $this->mysqli = connect();
           }
    public function tutorLogin($email, $password){
        $query = "SELECT * FROM tutor WHERE email='$email' AND password ='$password'";
        $result = $this->mysqli->query($query);
      if($result){
          $row = $result->fetch_assoc();
          if($row){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['role'] = "tutor";
            return true;
          }
          else{
            return false;
            
          }
        }
    }     
    public function addTutor($tutor){
            $id = $tutor->getId();
            $fullname = $tutor->getFullName();
            $dob = $tutor->getDob();
            $gender = $tutor->getGender();
            $email = $tutor->getEmail();
            $phoneno = $tutor->getPhoneno();
            $address = $tutor->getAddress();
            $edu = $tutor->getEdu();
            $exp= $tutor->getExp();
            $story= $tutor->getStory();
            $img= $tutor->getImg();
            $password = $tutor->getPassword();
            $query = "INSERT INTO tutor VALUES('$id','$fullname','$dob','$gender','$email','$phoneno','$address','$edu','$exp','$story','$img','$password')";
            $result = $this->mysqli->query($query);
            if($result){
                return "Successfully Signed Up";
            }else{
                return "Invalid Information"; 
    
            }            
    }
}


class dbcomment {
    private $Id;
    private $Name;
    private $Comment;
//      public function __construct(){
//        include_once('db.php');
//        $this->mysqli = connect();
//    }
//    
//    public function addComment($comment){
//     $Id = $comment->getId();
//     $Name= $comment->getName();
//        $Comment = $comment->getComment();
//
//        $query = "INSERT INTO comment VALUES('$Id','$Name','$Comment')";
//        $result = $this->mysqli->query($query);
//            if($result){
//                return "YOUR COMMENT IS SENT Successfully";
//            }else{
//                return "Invalid Information TRY AGAIN"; 
//    
//            }       
//    }  
    } 
?>


