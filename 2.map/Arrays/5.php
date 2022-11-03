<?php

function display_board($tableCell)
{
    echo " {$tableCell[0][0]} | {$tableCell[0][1]} | {$tableCell[0][2]} \n";
    echo "---+---+---" . PHP_EOL;
    echo " {$tableCell[1][0]} | {$tableCell[1][1]} | {$tableCell[1][2]} \n";
    echo "---+---+---" . PHP_EOL;
    echo " {$tableCell[2][0]} | {$tableCell[2][1]} | {$tableCell[2][2]} \n";
}

$table = [
    [" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "],
];

$player = " ";
$tries = 0;
$gameStatus = true;

while(true){
    display_board($table);
    $rowsColumns = readline("set your choice (row, column)");
    $userPosition = explode(" ", $rowsColumns);

    if (count($userPosition) !== 2) {
        echo "Invalid input" . PHP_EOL;
        continue;
    }

    $player = ($tries % 2 == 0) ? "X" : "O";

    if($table[$userPosition[0]][$userPosition[1]]  == " "){
        $table[$userPosition[0]][$userPosition[1]]=$player;
        $tries++;
    }
    else
        echo "Filled cell" . PHP_EOL;

    if($table[0][0] !== " " && $table[0][0] == $table[0][1] && $table[0][1]==$table[0][2]){
        echo $player . " player win\n";
        exit;
    }

    if($table[1][0] !== " " && $table[1][0] == $table[1][1] && $table[1][1]==$table[1][2]){
        echo $player . " player win\n";
        exit;
    }
    if($table[2][0] !== " " && $table[2][0] == $table[2][1] && $table[2][1]==$table[2][2]){
        echo $player . " player win\n";
        exit;
    }
    if($table[0][0] !== " " && $table[0][0] == $table[1][0] && $table[1][0]==$table[2][0]){
        echo $player . " player win\n";
        exit;
    }
    if($table[0][1] !== " " && $table[0][1] == $table[1][1] && $table[1][1]==$table[2][1]){
        echo $player . " player win\n";
        exit;
    }
    if($table[0][2] !== " " && $table[0][2] == $table[1][2] && $table[1][2]==$table[2][2]){
        echo $player . " player win\n";
        exit;
    }
    if($table[0][0] !== " " && $table[0][0] == $table[1][1] && $table[1][1]==$table[2][2]){
        echo $player . " player win\n";
        exit;
    }
    if($table[0][2] !== " " && $table[0][2] == $table[1][1] && $table[1][1]==$table[2][0]){
        echo $player . " player win\n";
        exit;
    }

    if($tries==9) {
        system("clear");
        display_board($table);
        echo "Game is tie";
        exit;
    }
}