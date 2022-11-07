<?php

class NumberSquare {
    private int $min;
    private int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public  function printSquare(){
   for ( $i=$this->min; $i<=$this->max; $i++){
      for ( $j=$i; $j<=$this->max; $j++){
         echo ($j) . " ";
      }
for ( $k=0; $k<$i-$this->min; $k++){
    echo ($this->min+$k) . " ";
      }
     echo PHP_EOL;
   }
}
}
$numbers = new NumberSquare(10,20);
$numbers->printSquare();

