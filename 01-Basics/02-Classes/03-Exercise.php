<?php

class FuelGauge
{

    protected $fuel;

    public function showFuel() {
        return "Current fuel level is $this->fuel liters.\n";
    }

    public function fillFuel() {
        if ($this->fuel < 70) {
            $this->fuel++;
        } else {
            return "Fuel full\n";
        }
    }

    public function burnFuel() {
        if ($this->fuel > 0) {
            $this->fuel--;
        } else {
            return "Fuel empty\n";
        }
    }

    public function getFuel() {
        return $this->fuel;
    }
}

class Odometer
{
    protected $kilometers = 0;

    public function showKM() {
        return "Current odometer reading is $this->kilometers kilometers.\n";
    }

    public function increaseKM(FuelGauge $fuel) {
        if ($fuel->getFuel() > 0) {
            ($this->kilometers !== 999999) ? $this->kilometers++ : $this->kilometers = 0;

            if ($this->kilometers % 10 === 0) {
                return $fuel->burnFuel();
            }

        } else {
            return "Car stopped, no more fuel.\n";
        }
    }

}

$fuelGauge = new FuelGauge();
$odometer = new Odometer();

// Filling Up
do {
    echo $fuelGauge->fillFuel();
    echo $fuelGauge->showFuel();
} while ($fuelGauge->getFuel() < 70);

// Driving
do {

    echo $odometer->increaseKM($fuelGauge);
    echo $odometer->showKM();

} while ($fuelGauge->getFuel() > 0);

$fuelGauge->showFuel();