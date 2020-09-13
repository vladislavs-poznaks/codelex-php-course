<?php

echo "Input the 1st number: ";
$first = (int) readline();

echo "Input the 2nd number: ";
$second = (int) readline();

echo "Input the 3rd number: ";
$third = (int) readline();

$max = $first;
($second > $max) ? $max = $second : '';
($third > $max) ? $max = $third : '';

echo "Maximum number is $max.\n";