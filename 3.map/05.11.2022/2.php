<?php

$numbers = readline("Input number of terms(include space between numbers) : ") ;
[$a, $b]= explode(" ", $numbers);
$sum = 1;

for($i=0; $i<$b; $i++){
    $sum = $sum * $a;
}
echo $sum;
