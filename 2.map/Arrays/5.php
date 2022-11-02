<?php
function display_board()
{
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
    echo "---+---+---\n";
    echo "   |   |   \n";
}
display_board();

$cell =
    [
        [0, 1, 2, 3, 4, 5, 6, 7, 8],
        ["X", "O"]
    ];

$table = ["_", "_", "_", "_", "_", "_", "_", "_", "_", ];

$tries = 0;

for($i=0; $i < count($table); $i++) {
    if ($tries % 2 === 0) {
        $PlayerRows = (int)readline("Enter 'X' position (rows) : ");
        $PlayerColumns = (int)readline("Enter 'X' position (columns) : ");

        if ($PlayerRows == 0 && $PlayerColumns == 0){
            if($table[$cell[0][0]]=="_"){
                $table[$cell[0][0]] = $cell[1][0];
                $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 0 && $PlayerColumns == 1){
            if($table[$cell[0][1]]=="_"){
                $table[$cell[0][1]] = $cell[1][0];
                $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 0 && $PlayerColumns == 2){
            if($table[$cell[0][2]]=="_"){
                $table[$cell[0][2]] = $cell[1][0];
                $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 1 && $PlayerColumns == 0){
            if($table[$cell[0][3]]=="_"){
                $table[$cell[0][3]] = $cell[1][0];
                 $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 1 && $PlayerColumns == 1){
            if($table[$cell[0][4]]=="_"){
                $table[$cell[0][4]] = $cell[1][0];
                 $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 1 && $PlayerColumns == 2){
            if($table[$cell[0][5]]=="_"){
                $table[$cell[0][5]] = $cell[1][0];
                 $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 2 && $PlayerColumns == 0){
            if($table[$cell[0][6]]=="_"){
                $table[$cell[0][6]] = $cell[1][0];
                 $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 2 && $PlayerColumns == 1){
            if($table[$cell[0][7]]=="_"){
                $table[$cell[0][7]] = $cell[1][0];
                 $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if ($PlayerRows == 2 && $PlayerColumns == 2){
            if($table[$cell[0][8]]=="_"){
                $table[$cell[0][8]] = $cell[1][0];
                 $tries++;
            }
            else
                echo "Aiznemts lauks" . PHP_EOL;
        }

        if($table[0]=="X"){
            if($table[1]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[2]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($table[0]=="X"){
            if($table[3]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[6]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($table[3]=="X"){
            if($table[4]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[5]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($table[1]=="X"){
            if($table[4]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[7]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($table[2]=="X"){
            if($table[5]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[8]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($table[6]=="X"){
            if($table[7]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[8]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($table[0]=="X"){
            if($table[4]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[8]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($table[2]=="X"){
            if($table[4]=="X"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[6]=="X"){
                    echo "X player won";
                    exit;
                }
            }
        }

        if($tries==9) {
            echo "Game is tie";
            exit;
        }

        for($j=1; $j <= count($table); $j++) {
            if($j % 3 == 0)
                echo json_encode($table[$j-1]). PHP_EOL;
            else
                echo json_encode($table[$j-1]);
        }
    }

 // ---------------------------------------------------------------------------------- //
 // ---------------------------------------------------------------------------------- //

    else {

        $PlayerRows = (int)readline("Enter 'O' position (rows) : ");
        $PlayerColumns = (int)readline("Enter 'O' position (columns) : ");

    if ($PlayerRows == 0 && $PlayerColumns == 0){
        if($table[$cell[0][0]]=="_"){
            $table[$cell[0][0]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 0 && $PlayerColumns == 1){
        if($table[$cell[0][1]]=="_"){
            $table[$cell[0][1]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 0 && $PlayerColumns == 2){
        if($table[$cell[0][2]]=="_"){
            $table[$cell[0][2]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 1 && $PlayerColumns == 0){
        if($table[$cell[0][3]]=="_"){
            $table[$cell[0][3]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 1 && $PlayerColumns == 1){
        if($table[$cell[0][4]]=="_"){
            $table[$cell[0][4]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 1 && $PlayerColumns == 2){
        if($table[$cell[0][5]]=="_"){
            $table[$cell[0][5]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 2 && $PlayerColumns == 0){
        if($table[$cell[0][6]]=="_"){
            $table[$cell[0][6]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 2 && $PlayerColumns == 1){
        if($table[$cell[0][7]]=="_"){
            $table[$cell[0][7]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

    if ($PlayerRows == 2 && $PlayerColumns == 2){
        if($table[$cell[0][8]]=="_"){
            $table[$cell[0][8]] = $cell[1][1];
            $tries++;
        }
        else
            echo "Aiznemts lauks" . PHP_EOL;
    }

        if($table[0]=="O"){
            if($table[1]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[2]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($table[0]=="O"){
            if($table[3]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[6]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($table[3]=="O"){
            if($table[4]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[5]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($table[1]=="O"){
            if($table[4]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[7]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($table[2]=="O"){
            if($table[5]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[8]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($table[6]=="O"){
            if($table[7]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[8]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($table[0]=="O"){
            if($table[4]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[8]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($table[2]=="O"){
            if($table[4]=="O"){
                for($j=1; $j <= count($table); $j++) {
                    if($j % 3 == 0)
                        echo json_encode($table[$j-1]). PHP_EOL;
                    else
                        echo json_encode($table[$j-1]);
                }
                if($table[6]=="O"){
                    echo "O player won";
                    exit;
                }
            }
        }

        if($tries==9) {
            echo "Game is tie";
            exit;
        }

        for($j=1; $j <= count($table); $j++) {
            if($j % 3 == 0)
                echo json_encode($table[$j-1]). PHP_EOL;
            else
                echo json_encode($table[$j-1]);
        }
    }
};

