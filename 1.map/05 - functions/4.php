<?php
$person = [
    [
        "name"=> "Ilya ",
        "surname"=> "Martinovs ",
        "age"=> 12
    ],
    [
        "name"=> "Olegs ",
        "surname"=> "Afonjevs ",
        "age"=> 24
    ]
];

function age($arr) {
    $list = ["name", "surname", "age"];
        for($j = 0; $j < 2; $j++) {
            if($arr[$j]["age"] > 17) {
                for($i = 0; $i < 3; $i++)
                    echo ($arr[$j][$list[$i]]);
                }
            }
}
echo age($person);
//var_dump($person);