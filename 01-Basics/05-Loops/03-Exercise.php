<?php

$firstWord = readline("Enter first word: ");
$secondWord = readline("Enter second word: ");

$dotCount = 30 - strlen($firstWord) - strlen($secondWord);

echo $firstWord;
for ($i = 1; $i <= $dotCount; $i++) {
    echo ".";
}
echo $secondWord . "\n";