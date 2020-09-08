<?php

function rangeSumAndAverage($lower, $upper) {
    $sum = 0;

    for ($i = $lower; $i <= $upper; $i++) {
        $sum += $i;
    }

    $avr = $sum / ($upper - $lower + 1);

    echo "The sum of $lower to $upper is $sum.\n";
    echo "The average is $avr.\n";
}

// Tests
rangeSumAndAverage(1, 100);
rangeSumAndAverage(5, 6);