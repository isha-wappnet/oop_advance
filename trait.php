<?php
   trait Add{
      public function add($var1,$var2){
         return $var1+$var2;
      }
   }
   trait Mul {
      public function multiplication($var1,$var2){
         return $var1*$var2;
      }
   }
   class Calculate{
      use Add;
      use Mul;
      public function calculate($var1,$var2){
         echo "Ressult of addition:".$this->add($var1,$var2) ."<br>";

         echo "Ressult of multiplication:".$this->multiplication($var1,$var2);
      }
   }
   $cal = new Calculate();
   $cal->calculate(5,3);
   ?>
