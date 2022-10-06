<?php
class Car{
    public $comp;
    public $color = "beige<br>";
    public $hasSunRoof = true;

    public function hello(){
        return "beep";
    }
}

$bmw = new Car();
$marcedes = new Car();
$bmw -> comp = "BMW";
$marcedes-> comp = "Marcedes Benz";


echo $bmw->color;
echo $marcedes->color;

?>