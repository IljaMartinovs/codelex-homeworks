<?php

$randomNumbers = [];

for($i = 0; $i < 10; $i++){
    $randomNumbers[$i] = rand(1,100);
}

$anotherNumbers = $randomNumbers;

$randomNumbers[9] = -7;
//print_r ($randomNumbers);
//print_r ($anotherNumbers);
echo "Array 1: " .json_encode ($randomNumbers) . PHP_EOL;
echo "Array 2: " .json_encode ($anotherNumbers);
