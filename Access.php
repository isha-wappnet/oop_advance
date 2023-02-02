<?php
    class A{
    public $name;
   // function __construct($n){
        //$this->name= $n;
    //}
    function show(){
        echo "Name is $this->name <br>";
    }
}
    class B extends A{
        function hello(){
            echo "<h3> hello</h3>";

        //echo "your name $this->name";
        }
    }
    $obj2= new A();
    $obj2->name="esha";
    $obj2->show();
    $obj= new B();
    $obj->name="isha";
    $obj->show();
    $obj->hello();
    

?>