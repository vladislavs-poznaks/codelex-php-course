<?php
$pcNumber = rand(1, 100);
$playerNumber = 0;

echo $pcNumber . PHP_EOL;

$currentAttempts = 1;
$attempts = (int) readline('Attempts: ');

$min = 1;
$max = 100;

while ($currentAttempts <= $attempts && $playerNumber !== $pcNumber)
{
    if ($playerNumber === 0) {
        $playerNumber = 50;
    } else {
        $playerNumber = rand($min, $max);
    }
    echo 'GUESS (' . $currentAttempts . '): ' . $playerNumber . ' ';

    if (abs($playerNumber - $pcNumber) > 10) {
        $border = 10;
    } else {
        $border = 1;
    }

    if ($playerNumber === $pcNumber)
    {
        echo 'CORRECT';
    } else if ($playerNumber > $pcNumber)
    {
        $max = $playerNumber - $border;
        echo 'LOWER';
    } else {
        $min = $playerNumber + $border;
        echo 'HIGHER';
    }
    echo PHP_EOL;
    $currentAttempts++;
}
