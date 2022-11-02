<?php
$valu= [1];
$fruits = [
    ["banana","apple","grape"],
    [3, 11, 15]
];

function weight($mas) {
    $cost = [1, 2];
    for($i = 0; $i < count($mas[0]); $i++) {
        if($mas[1][$i] > 10){
            echo "{$mas[0][$i]} is {$mas[1][$i]} kg and shipping cost will be ";
            echo $cost[1]*$mas[1][$i] ," euros ({$cost[1]} per kg)" . PHP_EOL;
        }
        else {
            echo "{$mas[0][$i]} is {$mas[1][$i]} kg and shipping cost will be ";
            echo $cost[0] * $mas[1][$i], " euro ({$cost[0]} per kg)" . PHP_EOL;
        }
    }
}

foreach($valu as $value){
    weight($fruits);
}
