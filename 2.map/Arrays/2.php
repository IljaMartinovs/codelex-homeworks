<?php
$numbers = [20, 30, 25, 35, -16, 60, -100];
$count = 0;

//todo calculate an average value of the numbers
for($i = 0; $i < count($numbers); $i++) {
    $count = ($count + $numbers[$i]);
}

$count = ($count/count($numbers));
echo $count;