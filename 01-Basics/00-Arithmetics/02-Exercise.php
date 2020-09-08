<?php

function checkOddEven($number) {
    if ($number % 2 === 0) {
        echo "$number is even number. \n";
    } else {
        echo "$number is odd number. \n";
    }

    echo "Bye!\n";
}

// Tests
checkOddEven(6);
checkOddEven(7);