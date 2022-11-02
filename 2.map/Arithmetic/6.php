<?php

$n=10;
$number = range(1,110,1);
$k = -1;
//var_dump($number);

for($i=1; $i<=$n; $i++)
{
    for($j=0; $j<11 ;$j++ )
    {
        $k++;
          if(($number[$k] % 3 === 0 && $number[$k] % 5 === 0))
            echo "CozaLoza ";
          else if(($number[$k] % 3 === 0 && $number[$k] % 7 === 0))
            echo "CozaWoza ";
          else if(($number[$k] % 5 === 0 && $number[$k] % 7 === 0))
              echo "LozaWoza ";
        else if($number[$k] % 3 === 0)
            echo "Coza ";
        else if($number[$k] % 5 ===0)
            echo "Loza ";
        else if($number[$k] % 7 ===0)
            echo "Woza ";
        else
            print_r($number[$k] . " ");
    }
    echo PHP_EOL;
}


