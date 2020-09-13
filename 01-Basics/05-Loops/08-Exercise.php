<?php

$min = (int) readline("Min: ");
$max = (int) readline("Max: ");

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