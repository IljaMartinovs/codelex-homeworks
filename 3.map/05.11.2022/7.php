<?php

class RollTwoDice {

    public static function main() : void {
        $desSum=0;
        $sum = readline ("Desired sum: ");
            while($desSum!=$sum){
                $roll1 = rand(1,6);
                $roll2 = rand(1,6);
                $desSum = $roll1 + $roll2;
                echo "$roll1 and $roll2 = $desSum\n";
            }
    }
}
RollTwoDice::main();