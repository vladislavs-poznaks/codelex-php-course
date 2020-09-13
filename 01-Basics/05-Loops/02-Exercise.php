<?php

echo "Input number of terms: ";
$n = (int) readline();
$total = $n;
for ($i = 1; $i < $n; $i++) {
    $total *= $n;
}

echo "The total is $total.\n";