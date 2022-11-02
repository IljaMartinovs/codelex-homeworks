<?php

function bmi($weight, $height) {
    return (($weight/$height/$height)) * 10000;
}

$kg = readline("Enter your weight in kg: ");
$cm = readline("Enter your height in cm: ");
$an = bmi($kg,$cm);

if($an<18.5)
    echo "Underweight";
else if($an>25)
    echo "Overweight";
else
    echo "Optimal weight";
