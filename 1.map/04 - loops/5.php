<?php
$list = ["name", "surname", "age", "birthday"];
$items = [
    [
        [
            "name" => "John ",
            "surname" => "Doe ",
            "age" => 50,
            "birthday" => " 25May"
        ],
        [
            "name" => "Ilja",
            "surname" => "Martinovs",
            "age" => 41,
            "birthday" => "11 September"
        ]
    ]
];
for($j = 0; $j < 2; $j++) {
    for ($i = 0; $i < 4; $i++) {
        echo($items[0][$j][$list[$i]]);
    }
}
