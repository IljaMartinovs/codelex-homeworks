<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct (int $month, int $day, int $year)
    {
        if($month>0 && $month<13)
            $this->month = $month;
        else
            exit;

        if($day>0 && $day < 32)
            $this->day = $day;
        else
            exit;

        if($year>0)
            $this->year = $year;
        else
            exit;
    }

    public function getDate(): int
    {
        return $this->month . $this->day . $this->year;
    }

    public function setDate(int $newMonth, int $newDay, int $newYear): void
    {
        $this->month = $newMonth;
        $this->day = $newDay;
        $this->year = $newYear;
    }

    public function DisplayDay(): void
    {
        echo $this->month . "/" . $this->day . "/" . $this->year . PHP_EOL;
    }
}

$may = new Date (12, 13,2022);
$may->DisplayDay();
$may->setDate(10,15,2030);
$may->DisplayDay();
echo $may->getDate();