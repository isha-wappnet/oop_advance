<?php
    class Human {
        // protected variable
        protected $genders = array("Male", "Female", "Other");
        
        // protected function for humans features
        protected function getFeatures($gender) {
            if($gender == "Male") {
                echo "Men will be Men <br>";
            }
            else if($gender == "Female") {
                echo "Women's mind is a maze<br>";
            }
            else if($gender == "Other") {
                echo "All are born equal<br>";
            }
        }
        
    }
    
    // subclass of the above class
    class Male extends Human {
        protected $gender = "Male";
        
        // public function to print Male features
        public function getMaleFeatures() {
            // calling the protected getFeatures() method of class Human
            $this->getFeatures($this->gender);
        }
    }
    // subclass of the above class
    class Female extends Human {
        protected $gender = "Female";
        
        // public function to print Male features
        public function getFemaleFeatures() {
            // calling the protected getFeatures() method of class Human
            $this->getFeatures($this->gender);
        }
    }
    // subclass of the above class
    class Others extends Human {
        protected $gender = "Other";
        
        // public function to print Other features
        public function getOtherFeatures() {
            // calling the protected getFeatures() method of class Human
            $this->getFeatures($this->gender);
        }
}
    
    $human = new Human();
    /*
    echo $human->genders;   // INVALID
    $human->getFeatures("Male");    // INVALID
    echo $male->gender;     // INVALID
    */
    $male = new Male();
    $female= new Female();
    $female->getFemaleFeatures();
    $male->getMaleFeatures();
    $other = new Others();
    $other->getOtherFeatures();
    
 

?>