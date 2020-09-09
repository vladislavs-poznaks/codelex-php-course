<?php

$number = readline("Enter a number: ");

if ($number > 0) {
    echo "The number consists of " . strlen($number) . " digits.\n";
} else {
    echo "Error.\n";
}