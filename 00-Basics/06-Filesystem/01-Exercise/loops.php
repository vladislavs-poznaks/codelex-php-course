<?php

$x = 1;
while ($x <= 10) {
    echo "$x, ";
    $x++;
}
echo "\n";

for ($i = 10; $i > 0; $i--) {
    echo "$i, ";
}
echo "\n";

$fruits = ['mango', 'banana', 'pineapple', 'dragonfruit'];
foreach ($fruits as $fruit) {
    echo ucfirst($fruit) . ", ";
}