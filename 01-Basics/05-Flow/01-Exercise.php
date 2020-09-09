<?php


echo "Input the 1st number: ";
$first = readline();

echo "Input the 2nd number: ";
$second = readline();

echo "Input the 3rd number: ";
$third = readline();

$max = $first;
($second > $max) ? $max = $second : '';
($third > $max) ? $max = $third : '';

echo "Maximum number is $max.\n";