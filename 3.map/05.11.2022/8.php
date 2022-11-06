<?php

class NumberSquare {

    public static function main(): void {
        $min = readline("Min? ");
        $max = readline("Max? ");

        for ($i=$min; $i<=$max; $i++){
            for ($j=$i; $j<= $i+$max-$min; $j++){
                $temp = $j;
                if ( $temp > $max ) $temp = $temp  - $max;
                echo $temp;
            }
            echo PHP_EOL;
        }
    }
}
NumberSquare::main();
