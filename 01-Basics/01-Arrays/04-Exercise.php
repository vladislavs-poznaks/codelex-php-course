<?php

$numbers = [];

for ($i = 0; $i <= 10; $i++) {
    $numbers[$i] = rand(1, 100);
}

$copyOfNumbers = $numbers;

$numbers[count($numbers) - 1] = -7;

echo "Array 1: ";
foreach ($numbers as $number) {
    echo "$number ";
}
echo "\nArray 2: ";
foreach ($copyOfNumbers as $number) {
    echo "$number ";
}
echo "\n";