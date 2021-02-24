<?php

spl_autoload_register(function ($classname){
   require_once $classname. '.php';
});

$square = new Square(new SquareAreaLib());
$square->squareArea(4);
$circle = new Circle(new CircleAreaLib());
$circle->circleArea(20);