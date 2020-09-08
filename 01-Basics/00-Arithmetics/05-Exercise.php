<?php

$numberToGuess = rand(1, 100);

echo "I'm thinking of a number between 1-100.  Try to guess it.\n";
$guess = readline("> ");

echo "\n";

if ((int)$guess === $numberToGuess) {
    echo "You guessed it!  What are the odds?!?";
} elseif ((int)$guess < $numberToGuess) {
    echo "Sorry, you are too low.  I was thinking of $numberToGuess.";
} elseif ((int)$guess > $numberToGuess) {
    echo "Sorry, you are too high.  I was thinking of $numberToGuess.";
}

echo "\n";