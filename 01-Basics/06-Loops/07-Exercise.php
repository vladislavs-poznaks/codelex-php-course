<?php

function rollDice() {
    return rand(1, 6);
}

$number = readline("Desired sum: ");
$number = intval($number);

do {

    $x = rollDice();
    $y = rollDice();

    echo "$x and $y = " . ($x + $y) . "\n";

} while (($x + $y) !== $number);