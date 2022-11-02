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


//echo($items[0][0][$list[0]] . ' ' . $items[0][0][$list[1]] . ' ' .$items[0][0][$list[2]] . ' ' .$items[0][0][$list[3]] . PHP_EOL );

//echo($items[0][0]['name'] . ' ' . $items[0][0]['surname'] . ' ' .$items[0][0]['age'] . ' ' .$items[0][0]['birthday'] . PHP_EOL );
//echo($items[0][1]['name'] . ' ' . $items[0][1]['surname'] . ' ' .$items[0][1]['age'] . ' ' .$items[0][1]['birthday'] . PHP_EOL);
