<?php


echo "Enter the number: ";
$number = readline();

//todo print if number is positive or negative
if ($number > 0) {
    echo "Number $number is positive.\n";
} elseif ($number < 0) {
    echo "Number $number is negative.\n";
} else {
    echo "Error.\n";
}
