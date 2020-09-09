<?php

function dayNumber($number) {

    switch ($number) {
        case ("0"):
            echo "Sunday\n";
            break;
        case ("1"):
            echo "Monday\n";
            break;
        case ("2"):
            echo "Tuesday\n";
            break;
        case ("3"):
            echo "Wednesday\n";
            break;
        case ("4"):
            echo "Thursday\n";
            break;
        case ("5"):
            echo "Friday\n";
            break;
        case ("6"):
            echo "Saturday\n";
            break;
        default:
            echo "$number is not a valid number.\n";
    }
}

dayNumber(4);
dayNumber("fs");
dayNumber(8);