<?php
$start = 1;
$end = 10;
$factorial = 1;

for($i = $start; $i <= $end; $i++){
    $factorial = $factorial * $i;
}
echo $factorial;