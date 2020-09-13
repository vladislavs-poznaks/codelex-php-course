<?php

function cozaLozaWoza($lower, $upper)
{

    $output = '';

    for ($i = $lower; $i <= $upper; $i++) {

        // Checks
        if ($i % 3 === 0) {
            $output .= "Coza";
        }
        if ($i % 5 === 0) {
            $output .= "Loza";
        }
        if ($i % 7 === 0) {
            $output .= "Woza";
        }

        if ($i % 3 !== 0
        && $i % 5 !== 0
        && $i % 7 !== 0) {
            $output .= $i;
        }

        // Line Drop
        if ($i % 11 === 0) {
            $output .= "\n";
        } else {
            $output .= " ";
        }
    }

    return $output;
}

//Tests
echo cozaLozaWoza(1, 110);