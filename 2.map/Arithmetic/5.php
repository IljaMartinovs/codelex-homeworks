<?php
 $randomNumber = rand(1,100);
 $attemp = 0;
 $answer = '';

 while($attemp!=3 && $answer!=$randomNumber)
 {
     echo "I'm thinking of a number between 1-100. Try to guess it. " . PHP_EOL;
     $answer = readline();
        if($answer==$randomNumber)
            echo "You guessed it!  What are the odds?!?";
        else if($answer>$randomNumber){
            echo "Sorry, you are too high.";
            echo PHP_EOL;
            $attemp++;
        }
        else if($answer<$randomNumber){
            echo "Sorry, you are too low.";
            echo PHP_EOL;
            $attemp++;
        }
 }
 echo PHP_EOL;
