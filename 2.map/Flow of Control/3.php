<?php

function digits ($num) {
    $sum=0;
    $num = str_split($num);

    for($i=0; $i < count($num); $i++)
        $sum++;
    echo $sum;
}

$number = readline("Inster a number: ");
digits($number);
