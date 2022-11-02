<?php
$numbers = [33,3,31,41,51,61,71,81,91,101];
for($x = 0; $x < count($numbers); $x++)
{
    if($numbers[$x] % 3 == 0)
        echo($numbers[$x]) . " ";
}