<?php

function PhoneKeyPad($input)
{
    $n = strlen($input);
    for ($i = 0; $i < $n; $i++) {
        $position = ord($input[$i]) - ord('A'); // ord( "A" ) = 65 in ascii system is like start point
        if($position>=0 && $position<=25) {
            switch ($position) {
                case 0:
                    echo "2";
                    break;
                case 1:
                    echo "22";
                    break;
                case 2:
                    echo "222";
                    break;
                case 3:
                    echo "3";
                    break;
                case 4:
                    echo "33";
                    break;
                case 5:
                    echo "333";
                    break;
                case 6:
                    echo "4";
                    break;
                case 7:
                    echo "44";
                    break;
                case 8:
                    echo "444";
                    break;
                case 9:
                    echo "5";
                    break;
                case 10:
                    echo "55";
                    break;
                case 11:
                    echo "555";
                    break;
                case 12:
                    echo "6";
                    break;
                case 13:
                    echo "66";
                    break;
                case 14:
                    echo "666";
                    break;
                case 15:
                    echo "7";
                    break;
                case 16:
                    echo "77";
                    break;
                case 17:
                    echo "777";
                    break;
                case 18:
                    echo "7777";
                    break;
                case 19:
                    echo "8";
                    break;
                case 20:
                    echo "88";
                    break;
                case 21:
                    echo "888";
                    break;
                case 22:
                    echo "9";
                    break;
                case 23:
                    echo "99";
                    break;
                case 24:
                    echo "999";
                    break;
                case 25:
                    echo "9999";
                    break;
            }

        }
        else{
            system("clear");
            exit("String should be with Uppercase letters.");
        }
    }
}

$word = readline("Insert a string: ");
PhoneKeyPad($word);
