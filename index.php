<?php
require_once "Figures\Square.php";
require_once "Figures\Triangle.php";
require_once "Figures\Rectangle.php";
require_once "Figures\Circle.php";

$square = new Square(4);
$triangle = new Triangle(3, 4, 5);
$rectangle = new Rectangle(5, 6);
$circle = new Circle(32);

echo "Площадь квадрата " . $square->getArea() . "<br>";
echo "Площадь треугольника " . $triangle->getArea() . "<br>";
echo "Периметр круга " . $circle->getPerimetr();