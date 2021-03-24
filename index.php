<?php

ini_set('display_errors', 'on');

// La fonction callback prend un paramètre (dont le nom est arbitraire) 
// et représente le nom de la classe que l'on a essayé de charger
// La fonction callback est appelée à chaque fois que l'on essaie d'instancier une classe
spl_autoload_register(function ($className) {
    require "classes/$className.php"; 
    
    // Version concaténation
    // require 'classes/' . $className . '.php';
});

$rectangle = new Rectangle(100, 100, 'limegreen', 0.8, 200, 150);
$ellipse = new Ellipse(100, 30, 50, 20, 'red', 0.6);
$triangle = new Triangle(250, 200, 100, 200, 200, 200, "blue", 0.7);

$container = new ShapeContainer(800, 600);
$container
    ->addShape($rectangle)
    ->addShape(new Rectangle(0, 0, 'black', 0.5, 50, 100))
    ->addShape($ellipse);
var_dump($container);



//pour le formulaire
$forms = [
    "Rectangle",
    "Ellipse",
    "Triangle"
];

$colors =[
    "forestgreen",
    "blue",
    "pink",
    "purple",
    "redfire",
    "orange",
];



require 'index.phtml';