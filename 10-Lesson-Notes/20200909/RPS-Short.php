<?php

do {
    $pl = readline("Enter choice (0: Rock, 1: Paper, 2: Scissors): ");
} while (! in_array($pl, ['0', '1', '2']));

$pc = rand(0, 2);

echo (($pc === (int) $pl) ? "DRAW!" : ((in_array($pl, [0 => [2], 1 => [0], 2 => [1]][$pc])) ? "LOOSE..." : "WIN!")) . " [PC: $pc vs $pl :You]" . "\n";