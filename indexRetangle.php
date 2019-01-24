<?php
include "Retangle.php";

$width = 10;
$height = 20;
$retangle = new Retangle($width,$height);

echo "Width: " . $retangle->width . "<br>";
echo "Height: ". $retangle->height . "<br>";
echo "Perimeter: " . $retangle->getPerimeter() . "<br>";
echo "Area: " . $retangle->getArea() . "<br>";
echo ("Your Retangle: ". $retangle->display());