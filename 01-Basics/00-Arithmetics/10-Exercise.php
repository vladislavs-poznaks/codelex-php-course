<?php

class Geometry {

    public static function circleArea($radius) {
        return pi() * pow($radius, 2);
    }

    public static function rectangleArea($length, $width) {
        return $length * $width;
    }

    public static function triangleArea($base, $height) {
        return $base * $height * 0.5;
    }
}

do {
    echo "
Geometry calculator:

Calculate the Area of a Circle
Calculate the Area of a Rectangle
Calculate the Area of a Triangle
Quit\n";

$choice = readline("Enter your choice (1-4): ");

if ($choice !== "1"
    && $choice !== "2"
    && $choice !== "3"
    && $choice !== "4"
) {
    echo "Invalid choice. Try again, bro!\n";
} else {

    switch ($choice) {
        case "1":
            $radius = readline("Enter radius: ");
            echo "Area is: " . Geometry::circleArea(floatval($radius)) . ".\n";
            break;
        case "2":
            $length = readline("Enter length: ");
            $width = readline("Enter width: ");
            echo "Area is: " . Geometry::rectangleArea(floatval($length), floatval($width)) . ".\n";
            break;
        case "3":
            $base = readline("Enter base: ");
            $height = readline("Enter height: ");
            echo "Area is: " . Geometry::triangleArea(floatval($base), floatval($height)) . ".\n";
    }
}

} while ($choice !== "4");