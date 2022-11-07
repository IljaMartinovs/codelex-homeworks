<?php

class Point
{
    public int $x;
    public int $y;

    function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }

    public static function swapPoints(object $first, object $second) {
        $a = $first->x; //5
        $b = $first->y; //2
        $first->x = $second->x; //-3
        $first->y = $second->y; //6
        $second->x = $a;//5
        $second->y = $b;//2
    }

}
$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")\n";
echo "(" . $p2->x . ", " . $p2->y . ")";