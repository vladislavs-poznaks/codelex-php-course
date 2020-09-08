<?php

function calculateSalary($basePay, $hoursWorked) {
    // Initial checks
    if ($hoursWorked > 60) {
        echo "Can't work more than 60 hours.\n";
        return;
    }
    if ($basePay < 8) {
        echo "Can't be payed less than $8.00 per hour.\n";
        return;
    }

    // Calculation
    if ($hoursWorked > 40) {
        $salary = 40 * $basePay + (($hoursWorked - 40) * ($basePay * 1.5));
    } else {
        $salary = $hoursWorked * $basePay;
    }

    // Output
    echo "With $$basePay and $hoursWorked work hours, the salary is $$salary.\n";
}

//Tests

calculateSalary(7.5, 35);
calculateSalary(8.2, 47);
calculateSalary(10, 73);
