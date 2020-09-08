<?php

// Ex 1
if(10 === "10") {
    echo "Impossible, man! Only with \"==\"\n";
} else {
    echo "Not equal, man...\n";
}

// Ex 2
$fifty = 50;
if($fifty > 1 && $fifty < 100) {
    echo "Oh, yeah, $fifty is between 1 & 100!\n";
}

// Ex 3
$hello = "hello";
if($hello === "hello") {
    echo "world\n";
}

// Ex 4
$value = 99;
if($value > 4 && $value < 400 && ($value % 2 === 0)) {
    echo "Everything checks out! The $value is between 4 & 400 and divides by 2 with no remainder.\n";
}

// Ex 5
// Range
$y = 10;
$z = 100;

if(50 > $y && 50 < $z) {
    echo "Correct, 50 is between $y & $z!\n";
} else {
    echo "Noooooo, 50 is NOT between $y & $z!\n";
}

// Ex 6
$plateNumber = "MM3199";

switch ("MM3131") {
    case $plateNumber:
        echo "This is my plate number!\n";
        break;
    default:
        echo "Plate not recognised...\n";
}

// Ex 7
$number = 99;

if ($number > 100) {
    echo "High!\n";
} elseif ($number < 50) {
    echo "Low!\n";
} else {
    echo "Medium!\n";
}