<?php

$gameStatus = "again";

function guess() {
    $words = ["apple", "egg", "codelex", "lemon"];
    $misses = [];
    $word = $words[array_rand($words)]; // pick one random word from array
    $letters = str_split($word); // split word into letters
    $correctWord = str_split(str_repeat("_", strlen($word))); // make string  "-" from $word strlen and divide


    echo "-=-=-=-=-=-=-=-";
    echo PHP_EOL;
    echo "Word: ";
    echo implode("", $correctWord); // put together [----] -> ----
    echo PHP_EOL;
    echo "Misses: ";
    echo PHP_EOL;

    $guesses = 0;
    $maxGueses = strlen($word) + 3;

    while ($guesses < $maxGueses && in_array("_", $correctWord)) { // pabaude vai ir parsniegts minejums vai ari varda ir "-" zimes
        $letter = readline("Guess: ");
        $letterPositions = array_keys($letters, $letter); // "codelex"  e=> ...e.e.
        echo "-=-=-=-=-=-=-=-";
        echo PHP_EOL;
        echo "Word: ";

        if (count($letterPositions) > 0) {
            foreach ($letterPositions as $position) {
                $correctWord[$position] = $letter;
            }
        }
        else  if (count($letterPositions) < 1) {
            array_push($misses, $letter);
        }
        echo implode("", $correctWord);
        echo PHP_EOL;
        echo "Misses: " ,implode("", $misses);;
        echo PHP_EOL;
        $guesses++;
    }

    echo in_array("-", $correctWord) ? "YOU LOOSE!" : "YOU GOT IT!";
    echo PHP_EOL;

    $answer = readline("Play again or quit? : ");
    return $answer;
}

while ($gameStatus === "again") {
    system("clear");
    $gameStatus = guess();
}
