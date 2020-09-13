<?php

function freeFallDist($seconds)
{
    $distance = 0.5 * (-9.81) * pow($seconds, 2);

    return "In $seconds seconds you'll fall $distance metres.\n";
}

//Tests
echo freefallDist(10);