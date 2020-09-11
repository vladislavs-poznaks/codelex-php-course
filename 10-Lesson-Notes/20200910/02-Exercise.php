<?php

$number = rand(1, 100);
$guess = 0;

while ($guess !== $number) {
    var_dump($number);

    $guess = (int) readline("Guess number: ");

    if ($guess === $number) {
        echo "You guessed $number!";
    } else {
        if (abs($guess - $number) < 6) {
            echo "Veryyyy hot, but... ";
        }
        echo (($guess < $number) ? "Too low!" : "Too high!");
    }

    echo PHP_EOL;
}

//while ($guess !== $number) {
//
//    $guess = (int) readline("Guess number: ");
//
//    echo (($guess === $number) ? "You guessed $number!"
//        : (($guess < $number) ? "Too low!" : "Too high!"));
//
//    echo PHP_EOL;
//}