<?php

$number = readline("Max number: ");
$number = intval($number);

for ($i = 1; $i <= $number; $i++) {

    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 === 0) {
        echo "Fizz ";
    } elseif ($i % 5 === 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }

    if ($i % 20 === 0) {
        echo "\n";
    }
 }

echo "\n";