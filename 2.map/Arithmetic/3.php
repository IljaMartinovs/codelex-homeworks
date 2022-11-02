<?php
$start = 1;
$end = 100;
$sum = 0;

for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}
$average = $sum/$end;

echo "The sum of $start to $end is $sum";
echo PHP_EOL;
echo "The average is $average";
echo PHP_EOL;