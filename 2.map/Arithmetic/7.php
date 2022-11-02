<?php

function gravity (){
    $time = 10;
    $acc = (-9.81);
    $Vi = 0;
    $Xi = 0;
    return  (0.5 * $acc * round($time,2) + $Vi * $time + $Xi)*$time;
}

echo gravity() . "m";
