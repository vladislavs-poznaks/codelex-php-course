<?php

require "bootstrap.php";

do {
    $game = new Game();

    echo PHP_EOL;
    echo "---------------------" . PHP_EOL;
    echo "Welcome to BlackJack!" . PHP_EOL;
    echo "---------------------" . PHP_EOL;

    do {
        echo $game->getHands();

        do {
            $input = strtolower(readline("Hit or Stand? (H / S)"));
        } while (! in_array($input, ['hit', 'h', 'stand', 's']));

        $game->playerPlays($input);

    } while ($game->playerIsPlaying($input));

    $game->dealerPlays();

    echo $game->getResult();

    do {
        $input = strtolower(readline("Play again or quit? (A / Q)"));
    } while (! in_array($input, ['again', 'a', 'quit', 'q']));

    PHP_EOL;
} while (in_array($input, ['again', 'a']));
