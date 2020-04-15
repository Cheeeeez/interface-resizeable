<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$percent = rand(1, 100);

$shapes = [];
$circle = new interface_resizeable\Circle("Circle", 10);
$rectangle = new interface_resizeable\Rectangle("Rectangle", 6, 4);
$square = new interface_resizeable\Square("Square", 5);
array_push($shapes, $circle, $rectangle, $square);
foreach ($shapes as $shape) {
    echo "---- <b>$shape->name</b> <br> Area: " . $shape->calculateArea() . "<br>";
    $shape->resize($percent);
}
echo "<br><span style='color: red'>After increase size $percent%:</span> <br><br>";
foreach ($shapes as $shape) {
    echo "---- <b>$shape->name</b> <br> Area: " . $shape->calculateArea() . "<br>";
}



