<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$num = (int)readline("Enter the number you looking for: ");

if(in_array($num,$numbers))
    echo "Correct";
else
    echo "Not correct";

