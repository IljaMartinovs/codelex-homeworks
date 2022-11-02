<?php

function largestNumber($a, $b, $c) {
    echo ($a>$b && $a>$c) ? $a : NULL;
    echo ($b>$a && $b>$c) ? $b : NULL;
    echo ($c>$a && $c>$b) ? $c : NULL;
}

$first = readline("Input the 1st number: ");
$second = readline("Input the 2st number: ");
$third = readline("Input the 3st number: ");

largestNumber($first,$second,$third);
