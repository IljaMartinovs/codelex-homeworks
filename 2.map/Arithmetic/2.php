<?php

function CheckOddEven($number){
    if($number % 2 === 0){
        echo "Odd Number";
        echo PHP_EOL;
        echo "bye!";
    }
    else{
        echo "Even Number";
        echo PHP_EOL;
        echo "bye!";
    }
}

CheckOddEven(8);
