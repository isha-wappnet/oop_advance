<?php
    class shape{
        function __call($name ,$argument){
            if($name== "area"){
                switch(count($argument)){
                    case 1:
                         return 3.14 * $argument[0];
                         break;
                    case 2:
                         return $argument[0]*$argument[1]*$argument[2];
                    case 3:
                         return $argument[0]*$argument[0];
   

                }
            }
        }
    }
    $rectangle = new shape();
    echo" Area of Rectangle= " .$rectangle->area(2,4,5)."<br>";

    $circle  = new shape();
    echo"Area of Circle= " .$circle->area(4)."<br>";

    $square  = new shape();
    echo"Area of Square= " .$square->area(8)."<br>";

?>