<?php

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

function swapPoints(Point &$p1, Point &$p2)
{
    $bufferX = $p1->x;
    $bufferY = $p1->y;

    $p1->x = $p2->x;
    $p1->y = $p2->y;

    $p2->x = $bufferX;
    $p2->y = $bufferY;
}

swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")\n";
echo "(" . $p2->x . ", " . $p2->y . ")\n";