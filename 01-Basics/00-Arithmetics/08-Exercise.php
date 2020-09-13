<?php

function calculateSalary($basePay, $hoursWorked)
{
    // Initial checks
    if ($hoursWorked > 60) {
        return "Can't work more than 60 hours.\n";
    } elseif ($basePay < 8) {
        return "Can't be payed less than $8.00 per hour.\n";
    } else {

        // Calculation
        if ($hoursWorked > 40) {
            $salary = 40 * $basePay + (($hoursWorked - 40) * ($basePay * 1.5));
        } else {
            $salary = $hoursWorked * $basePay;
        }

        // Output
        return "With $$basePay and $hoursWorked work hours, the salary is $$salary.\n";
    }
}

//Tests

echo calculateSalary(7.5, 35);
echo calculateSalary(8.2, 47);
echo calculateSalary(10, 73);
