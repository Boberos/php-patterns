<?php
include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'ShapeDecorator.php';
include_once 'RedShapeDecorator.php';

$circle = new Circle();
$rectangle = new Rectangle();
$redCircle = new RedShapeDecorator(new Circle());
$redRectangle = new RedShapeDecorator(new Rectangle());


echo "Circle with normal border <br/>";
$circle->draw();
echo '<br/> <br/>';
echo "Rectangle with normal border <br/>";
$rectangle->draw();
echo '<br/> <br/>';
echo "\nCircle of red border <br/>";
$redCircle->draw();
echo '<br/> <br/>';
echo "\nRectangle of red border <br/>";
$redRectangle->draw();