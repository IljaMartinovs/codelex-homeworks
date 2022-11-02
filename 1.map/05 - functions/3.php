<?php
$person = [
    "name"=> "Ilya",
    "surname"=> "Martinovs",
    "age"=> 22
];

function age($arr) {
    if($arr["age"] > 17)
        return ("Has reached 18");
    else
        return ("Has not reached 18");
}

echo age($person);