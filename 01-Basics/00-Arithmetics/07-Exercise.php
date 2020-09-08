<?php

function freefallDist($seconds) {
    $distance = 0.5 * (-9.81) * pow($seconds, 2);

    echo "In $seconds seconds you'll fall $distance metres.\n";
}

//Tests
freefallDist(10);