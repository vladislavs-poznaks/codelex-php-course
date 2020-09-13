<?php
const WINNING_COMBOS = [
    //Rows
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],
    //Columns
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]],
    //Diagonals
    [[0, 0], [1, 1], [2, 2]],
    [[0, 2], [1, 1], [2, 0]],
];

// Functions
function newBoard()
{
    return [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' '],
];
}

function displayIntro()
{
    return "      Tic Tac Toe\n"
    . "        Columns  \n"
    . "       0   1   2 \n"
    . "Row 0    |   |   \n"
    . "      ---+---+---\n"
    . "Row 1    |   |   \n"
    . "      ---+---+---\n"
    . "Row 2    |   |   \n";
}

function displayBoard($board)
{
    $display = "\n";

    for ($row = 0; $row < 3; $row++) {

        $display .= "      ";
        for ($col = 0; $col < 3; $col++) {
            $display .= " " . $board[$row][$col] . " ";
            if ($col === 2) {
                $display .= " ";
            } else {
                $display .= "|";
            }
        }

        if ($row === 2) {
            $display .= "\n               \n";
        } else {
            $display .= "\n      ---+---+---\n";
        }
    }

    return $display;
}

function getWinner($board)
{
    //Winning Rows
    foreach (WINNING_COMBOS as $combo) {
        if (checkRow($combo[0], $combo[1], $combo[2], $board)) {
            return $board[$combo[0][0]][$combo[0][1]];
        }
    }

    return ' ';
}

function isTie($board)
{
    foreach ($board as $line) {
        if (in_array(' ', $line)) {
            return false;
        }
    }
    return true;
}

function checkRow($x, $y, $z, $board)
{
    if ($board[$x[0]][$x[1]] === $board[$y[0]][$y[1]]
        && $board[$y[0]][$y[1]] === $board[$z[0]][$z[1]]
        && $board[$x[0]][$x[1]] !== ' ') {
        return true;
    } else {
        return false;
    }
}

do {
// New Game Setup
    $board = newBoard();
    $turn = 'X';
    echo displayIntro();

// Game
    do {

        echo "\n";
        $input = readline("'$turn', choose your location (row, column): ");
        $location = explode(' ', $input);

        if ($board[(int)$location[0]][(int)$location[1]] === ' ') {

            $board[(int)$location[0]][(int)$location[1]] = $turn;
            $turn === 'X' ? $turn = 'O' : $turn = 'X';
            echo displayBoard($board);

        } else {

            echo "Sorry, this spot is taken. Try again.\n";
            echo displayBoard($board);

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