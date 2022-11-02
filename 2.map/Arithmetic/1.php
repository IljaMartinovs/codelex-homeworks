<?php

function accept($a, $b){
    if($a===15 || $b===15 || $a-$b===15 || $a+$b===15){
        echo "true";
        return true;
    }
    else {
        echo "false";
        return false;
    }
}

accept(15,4);
