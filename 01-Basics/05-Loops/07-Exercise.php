<?php

function rollDice()
{
    return rand(1, 6);
}

$number = (int) readline("Desired sum: ");

do {

    $x = rollDice();
    $y = rollDice();

    echo "$x and $y = " . ($x + $y) . "\n";

} while (($x + $y) !== $number);