<?php

function rangeSumAndAverage($lower, $upper)
{
    $sum = 0;
    for ($i = $lower; $i <= $upper; $i++) {
        $sum += $i;
    }
    $avr = $sum / ($upper - $lower + 1);

    return "The sum of $lower to $upper is $sum.\n" . "The average is $avr.\n";
}

// Tests
echo rangeSumAndAverage(1, 100);
echo rangeSumAndAverage(5, 6);