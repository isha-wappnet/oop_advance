<?php
    //Parent class Bank
    class Employ{

        public $name;
        
        public $salary;
        public $age;
        function __construct($n,$a,$s){

           $this->name= $n;  
           $this->age=$a;
           $this->salary=$s;
        }
        function show(){
            echo "Information of Employ<br>";
            echo "Name of employ ". $this->name ."<br>";
            echo "Age of empploy".$this->age."<br>";
            echo "salary of employ".$this->salary."<br>";
        }
    }
        //child class
        class Manager extends Employ
        {
            function show()
            {
                echo "Information about manager <br>";
                echo "Name of employ".$this->name."<br>";
                echo "Age of empploy".$this->age ."<br>";
                echo "salary of employ".$this->salary ."<br>";      
    
            }

        }
        //child class

        class Security extends Employ{
            public $surname;
                function __construct($n,$sm,$a,$s){
                    $this->surname= $sm;
                    parent::__construct($n,$a,$s);
                }
            function show()
            {
                
                echo "Information about manager <br>";
                echo "Name of employ".$this->name."<br>";
                echo "surname of employ".$this->surname."<br>";
                echo "Age of empploy ".$this->age ."<br>";
                echo "salary of employ".$this->salary."<br>";       
    
            }

        }
     $b1= new Employ("isha",21,15000);
     $b1->show();
     $bb1 = new Manager("esha",22,24000);
     $bb1->show();
     $s1= new Security("sunny","rajput",30,1000);
     $s1->show();
    ?>