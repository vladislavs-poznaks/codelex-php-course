<?php

function checkAge($age) {
    if ($age > 18) {
        echo "Welcome to the club!\n";
    } else {
        echo "Sorry, not old enough...\n";
    }
}

function appendVlad($string) {
    echo "$string /Modified by V/\n";
}