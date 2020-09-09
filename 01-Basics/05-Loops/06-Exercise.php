<?php

$n = readline("Enter a number: ");
$n = intval($n);

for ($r = 1; $r <= $n; $r++) {

    for ($i = 0; $i < (4 * ($n - $r)); $i++) {
        echo '/';
    }

    for ($i = 0; $i < (8 * ($r - 1)); $i++) {
        echo '*';
    }

    for ($i = 0; $i < (4 * ($n - $r)); $i++) {
        echo '\\';
    }

    echo "\n";
}