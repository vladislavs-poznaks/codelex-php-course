<?php

$pl = (int) readline("Enter eggs for Player: ");
$pc = $pl + rand(-2, 2);

echo "Player has $pl eggs.\n";
echo "PC has $pc eggs.\n\n";

$i = 0;
$plWins = 0;
$pcWins = 0;

do {
    $i++;
    $winner = rand(0, 1);

    echo "G$i";
    if ($winner === 0) {
        $pl--;
        $pcWins++;
        echo " - PC won";
    } else {
        $pc--;
        $plWins++;
        echo " - Player won";
    }
    echo "\n";

} while ($pc > 0 && $pl > 0);

echo "\nPlayer won $plWins times.\n";
echo "PC won $pcWins times.\n";