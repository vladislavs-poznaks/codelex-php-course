<?php

require "bootstrap.php";

// Welcome message
echo "---Welcome to the Ship Wars!---";
echo "
Legend: ( ) - 'empty cell'
        (o) - 'missed cell'
        (x) - 'hit cell'" . PHP_EOL;
echo "-------Get ready, captain------" . PHP_EOL . PHP_EOL;

// Game Setup
$board = new Board($isShowed = false);
echo $board->showBoard() . PHP_EOL;

// Game
do {

    // Take a shot
    do {
        $row = (int)readline("Enter row (1 - 10): ");
        $col = (int)readline("Enter column (1 - 10): ");
    } while (! in_array($row, Board::OPTIONS) || ! in_array($col, Board::OPTIONS));

    echo $board->bomb($row, $col) . PHP_EOL;
    echo $board->showBoard() . PHP_EOL;

    // Print stats
    echo "Your stats, captain: Hits - " . $board->getHits() . " | Misses - " . $board->getMisses() . PHP_EOL;

    // $input = readline("Enter 'c' to continue testing: ");
} while ($board->isPlaying());

echo "Congrats! You got them all!" . PHP_EOL;

// todo
// Add PC Board and PC Player