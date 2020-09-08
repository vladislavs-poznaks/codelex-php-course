<?php

// Functions
function newBoard() {
    return [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' '],
];
}
function drawIntro() {
    echo "      Tic Tac Toe\n";

    echo "        Columns  \n";
    echo "       0   1   2 \n";
    echo "Row 0    |   |   \n";
    echo "      ---+---+---\n";
    echo "Row 1    |   |   \n";
    echo "      ---+---+---\n";
    echo "Row 2    |   |   \n";
}
function displayBoard($board) {
    echo "\n";

    for ($row = 0; $row < 3; $row++) {

        echo "      ";
        for ($col = 0; $col < 3; $col++) {
            echo " " . $board[$row][$col] . " ";
            if ($col === 2) {
                echo " ";
            } else {
                echo "|";
            }
        }

        if ($row === 2) {
            echo "\n               \n";
        } else {
            echo "\n      ---+---+---\n";
        }
    }
}
function getWinner($board) {
    //Winning Rows
    if ($board[0][0] === $board[0][1] && $board[0][1] === $board[0][2]) {
        return $board[0][0];
    }
    if ($board[1][0] === $board[1][1] && $board[0][1] === $board[1][2]) {
        return $board[1][0];
    }
    if ($board[2][0] === $board[2][1] && $board[2][1] === $board[2][2]) {
        return $board[2][0];
    }

    //Winning Columns
    if ($board[0][0] === $board[1][0] && $board[1][0] === $board[2][0]) {
        return $board[0][0];
    }
    if ($board[0][1] === $board[1][1] && $board[1][1] === $board[2][1]) {
        return $board[0][1];
    }
    if ($board[0][2] === $board[1][2] && $board[1][2] === $board[2][2]) {
        return $board[0][2];
    }

    //Winning Diagonals
    if ($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2]) {
        return $board[1][1];
    }
    if ($board[0][2] === $board[1][1] && $board[1][0] === $board[2][0]) {
        return $board[1][1];
    }

    return ' ';
}
function isTie($board) {
    foreach ($board as $line) {
        if (in_array(' ', $line)) {
            return false;
        }
    }
    return true;
}

do {
// New Game Setup
    $board = newBoard();
    $turn = 'X';
    drawIntro();

// Game
    do {

        echo "\n";
        $input = readline("'$turn', choose your location (row, column): ");
        $location = explode(' ', $input);

        if ($board[(int)$location[0]][(int)$location[1]] === ' ') {

            $board[(int)$location[0]][(int)$location[1]] = $turn;
            $turn === 'X' ? $turn = 'O' : $turn = 'X';
            displayBoard($board);

        } else {

            echo "Sorry, this spot is taken. Try again.\n";
            displayBoard($board);

        }

    } while (!isTie($board) && getWinner($board) === ' ');

// Check for winner & a tie
    if (getWinner($board) !== ' ') {
        echo "The winner is '" . getWinner($board) . "'.\n";
    } elseif (isTie($board)) {
        echo "The game is a tie.\n";
    }

// Prompt to play again
    $prompt = readline("Play again (Y / N): ");
} while (strtolower($prompt) === 'y');