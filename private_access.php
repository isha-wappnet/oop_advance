<?php
    class Person {
        // first name of person
        private $fname;
        // last name of person
        private $lname;
        
        // public function to set value for fname
        public function setFName($fname) {
            $this->fname = $fname;
            return $fname;
        }
        
        // public function to set value for lname
        public function setLName($lname) {
            $this->lname = $lname;
            return $lname;
        }
        
        // public function to 
        public function showName() {
            echo "My name is: " . $this->fname . " " . $this->lname;
        }
    }
    
    // creating class object
    $john = new Person();
    
    // trying to access private class variables
    //$john->fname = "John";  // invalid
    //$john->lname = "Wick";  // invalid
    
    // calling the public function to set fname and lname
     echo $john->setFName("John  ");
     echo $john->setLName("Wick");

?>