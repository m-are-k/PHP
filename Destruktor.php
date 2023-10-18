<?php
class Fruit{
    public $name;
    public $color;




    function __construct($name){
        $this->name=$name;
    }
    function __destruct() {
        echo "The fruit is {$this->name}. <br>";
    }
}




$apple =new Fruit("Apple");
$banana=new Fruit("Banana");




?>
