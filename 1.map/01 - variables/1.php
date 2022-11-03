<?php
$int = 10;
$flo = 10.10;
$str = "hello world";
//test
echo $int . PHP_EOL . number_format((float)$flo, 2, '.', '') . PHP_EOL . $str . PHP_EOL;