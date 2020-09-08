<?php

const WORDS = ['cookies',
    'image',
    'doll',
    'poetry',
    'wolf',
    'satellites',
    'monkey'];

//Functions
function displayTurn($display, $misses) {
    for ($i = 0; $i < count($display) + 5; $i++) {
        echo "-=";
    }
    echo "-\n\n";

    echo "Word:    ";
    foreach ($display as $letter) {
        echo "$letter ";
    }

    echo "\n\nMisses:  ";
    foreach ($misses as $letter) {
        echo "$letter ";
    }
    echo "\n\n";
}
function isWin($display) {
    foreach ($display as $letter) {
        if ($letter === '_') {
            return false;
        }
    }
    return true;
}

do {
//Game Setup
    $word = WORDS[rand(0, count(WORDS) - 1)];

    $display = [];
    $misses = [];
    for ($i = 0; $i < strlen($word); $i++) {
        $display[$i] = '_';
    }

//Game
    do {
        // var_dump($word);

        displayTurn($display, $misses);
        $guess = readline("Guess:  ");

        //Check letter in word
        $wordGuessed = false;
        for ($i = 0; $i < strlen($word); $i++) {

            if ($word[$i] === strtolower($guess)) {
                $display[$i] = strtolower($guess);
                $wordGuessed = true;
            }
        }

        if (!$wordGuessed) {
            $misses[] = $guess;
        }

    } while (!isWin($display) && count($misses) < 4);

    if (isWin($display)) {
        echo "Congrats, you won!\n";
        echo "The word is ";
        foreach ($display as $letter) {
            echo "$letter ";
        }
        echo "\n\n";
    } elseif (count($misses) === 4) {
        echo "Whoopsy, you're a dead weight now!\n\n";
    }

    // Prompt to play again
    $prompt = readline("Play \"again\" or \"quit\"?");
} while (strtolower($prompt) === "again");