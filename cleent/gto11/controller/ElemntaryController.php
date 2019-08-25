<?php
 
    class ElemntaryController{
            private $elemId;
            private $english;
            private $maths;
            private $science;
            private $civics;
            private $social;
            private $biology;
            private $physics;
            private $chemistry;
            private $computer;
        
        public function __construct(){
            include_once ('dbconn.php');
            $this->mysqli = connect();

    }
        public function addTutorB($tutorb){
            $elemId=$tutorb->getElemId();
            $english= $tutorb->getEnglsh();
            $maths = $tutorb->getMaths();
            $science= $tutorb->getScience();
            $civics= $tutorb->getCivics();
            $social = $tutorb->getSocial();
            $biology= $tutorb->getBiology();
            $physics= $tutorb->getPysics();
            $chemistry= $tutorb->getChemistry();
            $computer= $tutorb->getComputer();
    
$query = "INSERT INTO elemntarycourses VALUES('$elemId','$english','$maths','$science','$civics','$social','$biology','$physics','$chemistry','$computer')";
            
            $result = $this->mysqli->query($query);
            if($result){
                return "Successfully Signed Up";
            }else{
                return "Invalid Information"; 
//                return $query;
            }
    }
    
  } 