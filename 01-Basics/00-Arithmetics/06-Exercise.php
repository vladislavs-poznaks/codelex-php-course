<?php

function cozaLozaWoza($lower, $upper) {

    for ($i = $lower; $i <= $upper; $i++) {

        // Checks
        $output = '';
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
            $output = $i;
        }

        // Output
        echo "$output ";

        // Line Drop
        if ($i % 11 === 0) {
            echo "\n";
        }
    }
}

//Tests
cozaLozaWoza(1, 110);