<?php
   class TutorB{
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
       
       public function __construct($elemId,$english,$maths,$science,$civics,$social,$biology,$physics,$chemistry,$computer){
                $this->elemId=$elemId;
                $this->english=$english;
                $this->maths=$maths;
                $this->science=$science;
                $this->civics=$civics;
                $this->social=$social;
                $this->biology=$biology;
                $this->physics=$physics;
                $this->chemistry=$chemistry;
                $this->computer=$computer;
         
       }
         public function getElemId(){
            return $this->elemId;
        }  public function getEnglsh(){
            return $this->english;
        }  public function getMaths(){
            return $this->maths;
        }  public function getScience(){
            return $this->science;
        }  public function getCivics(){
            return $this->civics;
        }  public function getSocial(){
            return $this->social;
        }  public function getBiology(){
            return $this->biology;
        }  public function getPysics(){
            return $this->physics;
        } public function getChemistry(){
            return $this->chemistry;
        } public function getComputer(){
            return $this->computer;
        }


   }
?>
