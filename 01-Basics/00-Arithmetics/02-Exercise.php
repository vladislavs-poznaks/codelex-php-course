<?php

function checkOddEven($number)
{
    if ($number % 2 === 0) {
         $message = "$number is even number. \n";
    } else {
        $message = "$number is odd number. \n";
    }

    return $message . "Bye!\n";
}

// Tests
echo checkOddEven(6);
echo checkOddEven(7);