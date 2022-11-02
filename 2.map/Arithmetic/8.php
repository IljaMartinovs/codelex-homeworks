<?php

class eight
{
    public static function money($basePay,$hours)
    {
        $extraHours = $hours - 40;
        if ($basePay < 8 || $basePay > 60) {
            echo "ERROR";
            exit;
        } else if ($hours > 40) {
            return (($basePay * 40) + $extraHours * ($basePay * 1.5));
        } else
            return ($basePay * $hours);
    }

    public static function call() {
        $names = ["Ilya", "Rob", "John"];
        $bp = (int)readline("Insert a base pay: ");
        $ph = (int)readline("Insert a pay hours: ");
        $employee = readline("Choose the employee - Ilya [0], Rob [1], John [2] : ");
        echo $names[$employee] . " $" . $bp . " " . $ph . "hours " . eight::money($bp,$ph) . "$";
    }
}

eight::call();

