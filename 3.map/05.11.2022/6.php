<?php

class AsciiFigure {

    public static function draw(): void {
        $size = 5;
        $symbol = ['\\', '/', '*'];
        for($i=1; $i <= $size; $i++){
            for($j=1; $j <= ($size-$i)*4; $j++){
                    echo $symbol[1];
            }
            for($k=1; $k <= 8*$i-8; $k++){
                echo $symbol[2];
            }
            for($h=1; $h <= ($size-$i)*4; $h++){
                echo $symbol[0];
            }
            echo PHP_EOL;
        }
    }
}
AsciiFigure::draw();
