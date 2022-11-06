<?php

class FizzBuzz {
    public static function checking () : void {
        $number = readline("Max value? ");
        for($i=1; $i<=$number; $i++){
            if (($i % 3 === 0 && $i % 5 === 0))
                echo "FizzBuzz ";
            else if($i % 3 === 0)
                echo "Fizz ";
            else if($i % 5 ===0)
                echo "Buzz ";
            else
                echo $i . " ";
            if($i % 20 == 0)
                echo PHP_EOL;
        }
    }
}

FizzBuzz::checking();

