<?php

class FuelGauge {

    protected $fuel;

    public function showFuel() {
        echo "Current fuel level is $this->fuel liters.\n";
    }

    public function fillFuel() {
        if ($this->fuel < 70) {
            $this->fuel++;
        } else {
            echo "Fuel full\n";
        }
    }

    public function burnFuel() {
        if ($this->fuel > 0) {
            $this->fuel--;
        } else {
            echo "Fuel empty\n";
        }
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
    }

    public function getFuel() {
        return $this->fuel;
    }
}

class Odometer {
    protected $kilometers = 0;

    public function showKM() {
        echo "Current odometer reading is $this->kilometers kilometers.\n";
    }

    public function increaseKM(FuelGauge $fuel) {
        if ($fuel->getFuel() > 0) {
            ($this->kilometers !== 999999) ? $this->kilometers++ : $this->kilometers = 0;

            if ($this->kilometers % 10 === 0) {
                $fuel->burnFuel();
            }

        } else {
            echo "Car stopped, no more fuel.\n";
        }
    }

}

$fuel_gauge = new FuelGauge();
$odometer = new Odometer();

// Filling Up
do {
    $fuel_gauge->fillFuel();
    $fuel_gauge->showFuel();
} while ($fuel_gauge->getFuel() < 70);

// Driving
do {

    $odometer->increaseKM($fuel_gauge);
    $odometer->showKM();

} while ($fuel_gauge->getFuel() > 0);

$fuel_gauge->showFuel();