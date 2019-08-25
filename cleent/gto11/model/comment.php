<?php
    class Comment{
        private $Id;
        private $Name;
         private $Comment;
        public function __construct($Id,$Name,$Comment){
            $this->Id = $Id;
            $this->Name = $Name;
            $this->Comment = $Comment;
                   }
        public function getId(){
            return $this->Id;
        }
        public function getName(){
            return $this->Name;
        }
          public function getComment(){
            return $this->Comment;
        }
    }
?>