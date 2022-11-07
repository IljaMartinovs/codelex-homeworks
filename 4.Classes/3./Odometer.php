<?php

class Odometer
{
    private int $mileage;

    public function __construct(int $mileage)
    {
        $this->mileage = $mileage;
    }

    public function getMileage(): int
    {
            return $this->mileage;
    }

    public function increment(int $amount = 1): void
    {
        if($amount < 0) return; //Do not access to put 0

        if($this->mileage==999999)
            $this->mileage = 0;
        else
        $this->mileage += $amount;
    }
}
