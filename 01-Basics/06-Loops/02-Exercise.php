<?php

echo "Input number of terms: ";
$n = readline();
//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$n = intval($n);
$total = $n;
for ($i = 1; $i < $n; $i++) {
    $total *= $n;
}

echo "The total is $total.\n";