<?php

function factorial($lower, $upper) {
    $factorial = 1;

    for ($i = $lower; $i <= $upper; $i++) {
        $factorial *= $i;
    }

    echo "The factorial from $lower to $upper is $factorial.\n";
}

// Tests
factorial(1, 10);