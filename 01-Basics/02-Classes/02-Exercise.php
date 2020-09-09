<?php

class Point {

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

function swapPoints(Point $point1, Point $point2) {
    $new1 = new Point($point2->x, $point2->y);
    $new2 = new Point($point1->x, $point1->y);

    global $p1;
    global $p2;

    $p1 = $new1;
    $p2 = $new2;
}

swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")\n";
echo "(" . $p2->x . ", " . $p2->y . ")\n";