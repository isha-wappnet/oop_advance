<?php
    // abstract class
    abstract class Vehicle {
    
        // protected variable
        protected $name;
    
        
        public function start() {
            echo $this->name. " - Engine start...<br/>";
        }
        
        
        public function stop() {
            echo $this->name. " - Engine stop...<br/>";
        }
        
        
        public function setName($name) {
            $this->name = $name;
        }
        
        // abstract function mileage
        abstract public function mileage();
        }

    class Car extends Vehicle {
        
        public function mileage() {
            echo "I am " . $this->name . "<br/>";
            echo "My mileage range is - 15 to 22 Km/L";
        }
    }

    class Motorcycle extends Vehicle {
        
        public function mileage() {
            echo "I am " . $this->name . "<br/>";
            echo "My mileage range is - 35 to 47 Km/L";
        }
        
    }
   /* 
    $vechical = new Vehicle();
    $vechical->setName();
    */
    $car = new Car();
    $car->setName("BMW");
    $car->mileage();

    $mc = new Motorcycle();
    $mc->setName("Bullet");
    $mc->start();
    $mc->mileage();
    
    
?>