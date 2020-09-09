<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(int $numberSurveyed, float $percent)
{
    return round($numberSurveyed * $percent, 0);
}

function calculate_prefer_citrus(int $numberSurveyed, float $percent)
{
    global $purchased_energy_drinks;
    return round(calculate_energy_drinkers($numberSurveyed, $purchased_energy_drinks) * $percent, 0);
}


echo "Total number of people surveyed " . $surveyed . ".\n";
echo "Approximately " . calculate_energy_drinkers($surveyed, $purchased_energy_drinks) . " bought at least one energy drink. \n";
echo calculate_prefer_citrus($surveyed, $prefer_citrus_drinks) . " of those " . "prefer citrus flavored energy drinks.\n";