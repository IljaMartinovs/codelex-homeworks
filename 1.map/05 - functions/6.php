<?php

$numbers = [50, 60, 70, 10.21, "age"];

for($i = 0; $i < 1; $i++){
    echo "Size of array is " . sizeof($numbers) . PHP_EOL;
}

function double($arr)
{
    for($j=0; $j < count($arr); $j++){
        if(is_int($arr[$j]))
            echo $arr[$j]*2 . " ";
    }
}

double($numbers);