<?php
     class Addition{

        function calculate($a,$b){
            return $a + $b;
        }
     }
     class Multiplication extends Addition {
        function calculate($a,$b){
            return $a * $b;
        }
        
        
     }
     $a = new Addition();
     echo $a->calculate(15,20);

?>