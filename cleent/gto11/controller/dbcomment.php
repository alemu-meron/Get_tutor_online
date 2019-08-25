<?php
class Comment {
    private $Id;
    private $Name;    
    private $Comment;
      public function __construct(){
        include_once('db.php');
        $this->mysqli = connect();
    }
        public function addComment($comment){
     $Id = $comment->getId();
     $Name= $comment->getName();
     $Comment = $comment->getComment();
        $query = "INSERT INTO comment VALUES('$Id','$Name','$Comment')";
        $result = $this->mysqli->query($query);
            if($result){
                return "YOUR COMMENT IS SENT Successfully";
                $output = "Thank you for your comments";
            }else{
                return "Invalid Information TRY AGAIN"; 
    
            }       
    }  
    } 
?>



