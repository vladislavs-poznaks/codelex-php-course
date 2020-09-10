<?php

// Ternery & Numbers

$combos = [
    'r' => 's',
    'p' => 'r',
    's' => 'p'
];

$pc = array_rand($combos);

do {
    $pl = strtolower(readline("Enter choice (R/P/S): "));
} while (! array_key_exists($pl, $combos));

if ($pl === $pc) {
    echo "A Tie.\n";
} elseif ($combos[$pc] === $pl) {
    echo "PC Wins.\n";
} else {
    echo "Player Wins.\n";
}

echo "PC chose $pc\n";

