<?php

echo "Welcome to Piglet!\n";
$sum = 0;
$prompt = '';
$number = 0;

while ($number !== 1 && $prompt !== "no" && $prompt !== "n") {

    $number = rand(1, 6);
    echo "You rolled $number!\n";

    if ($number !== 1) {
        $prompt = strtolower(readline("Roll again (yes / no)? "));
        $sum += $number;
    } else {
        $sum = 0;
    }
}

echo "You got $sum points.\n";