<?php

function calculateBMI($weight, $height) {
    $bmi = round(($weight / $height / $height) * 10000, 2);

    if ($bmi >= 18.5 && $bmi <= 25) {
        echo "The BMI $bmi is optimal.\n";
    } elseif ($bmi > 25) {
        echo "The BMI $bmi suggests overweight.\n";
    } elseif ($bmi < 18.5) {
        echo "The BMI $bmi suggests underweight.\n";
    }
}

//Tests
calculateBMI(75, 180);