<?php

//    0 => 2     // Rock wins Scissors       0 - 2 = -2   * Other combos 0 - 0 = 0;   0 - 1 = -1
//    1 => 0     // Paper wins Rock          1 - 0 = 1    * Other combos 1 - 2 = -1;  1 - 1 = 0
//    2 => 1     // Scissors wins Paper      2 - 1 = 1    * Other combos 2 - 2 = 0;   2 - 0 = 2

//    So winning combination result is either -2 or 1, every other is either 0, -1 or 2.

//    Casting to integer outside the readline to fulfill input check.

do {
    $pl = readline("Enter choice (0: Rock, 1: Paper, 2: Scissors): ");
} while (! in_array($pl, ['0', '1', '2']));

$pc = rand(0, 2);

echo (($pc === (int)$pl) ? "DRAW!" : ((($pc - (int)$pl) === -2 || ($pc - (int)$pl) === 1) ? "LOOSE..." : "WIN!"))
    . " [PC: $pc vs $pl :You]" . "\n";