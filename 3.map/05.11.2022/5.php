<?php

class Piglet
{
    public static function game(): void{
        echo "Welcome to Piglet!\n";
        $continue = "y";
        $sum=0;

        while($continue=="y"){
            $input = rand(1, 5);
            echo "You rolled a " . $input . "!\n";
            $sum+=$input;
            if($input==1){
                echo "You got 0 points.";
                exit;
            }
            $continue = readline("Roll again? ");
        }
        echo "You got $sum points.";
    }
}
Piglet::game();