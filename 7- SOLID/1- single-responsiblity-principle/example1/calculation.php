<?php
include_once "square.php";
include_once "circle.php";
include_once "rectangle.php";

class calculation {
   public function area(object $shape){
    return $shape->getArea();
   }

}

$circle = new circle;
$circle->raduis= 10;

$circleArea = new calculation;
echo $circleArea->area($circle );
echo '<br/>';

$rectangle = new rectangle;
$rectangle->length= 20;
$rectangle->width= 10;

$rectangleArea = new calculation;
echo $rectangleArea->area($rectangle);
echo '<br/>';


$square = new square;
$square->side= 40;

$squareArea = new calculation;
echo $squareArea->area($square );
echo '<br/>';




?>