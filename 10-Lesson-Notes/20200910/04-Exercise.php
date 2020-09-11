<?php

$car = new stdClass();

$car->fuel = 50;
$car->speed = 90;
$car->efficiency = 7;

echo "Distance until empty: " . number_format(($car->fuel * 100 / 7), 2) . " km.". PHP_EOL;

$km = 0;

while ($car->fuel > 0) {

    if ($car->fuel >= 0.07) {
        $km++;
        echo "Distance traveled: $km km / Fuel remaining: "
            . number_format(($car->fuel - 0.07), 2) . " l." . PHP_EOL;
        $car->fuel -= 0.07;
    } else {
        round($km += $car->fuel * 100 / 7, 2);
        echo "Distance traveled: $km km";
        $car->fuel = 0;
        echo  " / Fuel remaining: " . $car->fuel . " l." . PHP_EOL;
    }
}
