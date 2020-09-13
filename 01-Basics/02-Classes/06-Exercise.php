<?php

$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinks = 0.64;

function calculateEnergyDrinkers(int $numberSurveyed, float $percent)
{
    return round($numberSurveyed * $percent, 0);
}

function calculatePreferCitrus(int $numberSurveyed, float $percent)
{
    global $purchasedEnergyDrinks;
    return round(calculateEnergyDrinkers($numberSurveyed, $purchasedEnergyDrinks) * $percent, 0);
}


echo "Total number of people surveyed " . $surveyed . ".\n";
echo "Approximately " . calculateEnergyDrinkers($surveyed, $purchasedEnergyDrinks) . " bought at least one energy drink. \n";
echo calculatePreferCitrus($surveyed, $preferCitrusDrinks) . " of those " . "prefer citrus flavored energy drinks.\n";