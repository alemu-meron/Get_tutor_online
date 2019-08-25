<?php
class signup {
    private $Clientid;
    private $Fullname;
    
        private $Email;
        private $Password;
        
        public function __construct($Fullname,$Email,$Password){
            $this->Clientid =$Clientid;
            $this->Fullname = $Fullname;
            $this->Email = $Email;
            $this->Password = $Password;
        }
public function getClientid(){
            return $this->Clientid;
        }
        public function getFullName(){
            return $this->Fullname;
        }
        public function getEmail(){
            return $this->Email;
        }
        
        public function getPassword(){
            return $this->Password;
        }
        
    }
?>
}
