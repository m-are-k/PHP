<?php
class Fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }


}
class Strawberry extends Fruit{
    public function message(){
        echo "Am I fruit or berry ";
    }
}
$strawberry=new Strawberry("Strawberry","Red");
$strawberry->messag();
$strawberry->intro();


?>
