<?php

function display(){
    echo "Geometry calculator: ";
    echo PHP_EOL;
    echo PHP_EOL;
    echo "Calculate the Area of a Circle";
    echo PHP_EOL;
    echo "Calculate the Area of a Rectangle";
    echo PHP_EOL;
    echo "Calculate the Area of a Triangle";
    echo PHP_EOL;
    echo "Quit";
    echo PHP_EOL;
}

class func {
    public static function Circle() {
        $radius = readline("Enter the radius of a circle: ");
        echo "Circle Area = " . (3.14 * $radius * 2);
        echo PHP_EOL;
    }

    public static function Rectangle() {
        $len = readline("Enter the length of a rectangle: ");
        $wid = readline("Enter the width of a rectangle: ");
        echo "Rectangle Area = " . ($len * $wid);
        echo PHP_EOL;
    }

    public static function Triangle() {
        $base = readline("Enter the base of a triangle: ");
        $height = readline("Enter the height of a triangle: ");
        echo "Triangle Area = " . ($base * $height * 0.5);
        echo PHP_EOL;
    }
}

display();
$answer = readline("Enter your choice (1-4): ");

if($answer > 0 && $answer < 5) {
    if ($answer == 1) {
        system("clear");
        func::Circle();
    } else if ($answer == 2) {
        system("clear");
        func::Rectangle();
    }
    else if ($answer == 3) {
        system("clear");
        func::Triangle();
    }
    else if($answer == 4) {
        exit;
    }
}
else
    echo "ERROR!" . PHP_EOL;