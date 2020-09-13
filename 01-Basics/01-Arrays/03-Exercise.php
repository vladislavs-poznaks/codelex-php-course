<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$value = (int) readline();

if (in_array($value, $numbers)) {
    echo "The value $value is in the array.\n";
} else {
    echo "The value $value is not in the array.\n";
}