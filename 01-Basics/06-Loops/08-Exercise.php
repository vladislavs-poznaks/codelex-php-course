<?php

$min = readline("Min: ");
$min = intval($min);

$max = readline("Max: ");
$max = intval($max);

for ($i = $min; $i <= $max; $i++) {

    for ($j = 0; $j <= ($max -$min); $j++) {

        if ($i + $j <= $max){
            echo ($i + $j) . " ";
        } else {
            echo (2 * $max - ($i + $j)) . " ";
        }

    }

    echo "\n";
}

echo "\n";