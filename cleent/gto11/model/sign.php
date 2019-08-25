<?php


class sign{
        private $Fullname;
        private $Dateofbirth;
        private $Gender;
        private $Email;
        private $Mobile;
        private $Address;
        private $Story;
        private $img;
      
      
        public function __construct( $Fullname,$Dateofbirth,$Gender,$Email,$Mobile,$Address,$Story,$img){
            $this->Fullname= $Fullname;
            $this->Dateofbirth = $Dateofbirth;
            $this->Gender = $Gender;
            $this->Email= $Mobile;
            $this->Mobile = $Mobile;
            $this->Address= $Address;
            $this->Story= $Story;
            $this->img= $img;
            
        }
        public function getFullname(){
            return $this->Fullname;
        }

        public function getDateofbirth(){
            return $this->Dateofbirth;
        }
        public function getGender(){
            return $this->Gender;
        }
        public function getEmail(){
            return $this->Email;
        }
        
        public function getMobile(){
            return $this->Mobile;
        }
        public function getAddress(){
            return $this->Address;
        }
         public function getStory(){
            return $this->Story;
        }
         public function getimg(){
            return $this->img;
        }
    }
?>


 