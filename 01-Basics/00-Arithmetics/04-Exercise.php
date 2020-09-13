<?php

function factorial($lower, $upper)
{
    $factorial = 1;

    for ($i = $lower; $i <= $upper; $i++) {
        $factorial *= $i;
    }

    return "The factorial from $lower to $upper is $factorial.\n";
}

// Tests
echo factorial(1, 10);