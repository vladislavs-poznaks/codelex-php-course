<?php

function checkFifteen($x, $y) {
    if ($x === 15
        || $y === 15
        || ($x + $y) === 15
        || ($x - $y) === 15
        || ($y - $x) === 15) {
        return true;
    } else {
        return false;
    }
}

// Tests
echo checkFifteen(14, 15);
echo checkFifteen(15, 30);
echo checkFifteen(14, 1);
echo checkFifteen(15, 0);
echo checkFifteen(14, 5);