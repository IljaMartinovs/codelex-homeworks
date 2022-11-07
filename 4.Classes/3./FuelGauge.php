<?php

class FuelGauge
{
    private int $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function fill(int $fillAmount = 1): void
    {
        $newAmount = $this->amount+=$fillAmount;
        $maxAmount = 70;

        if($newAmount > $maxAmount){
            $newAmount = $maxAmount;
        }
          $this->amount = $newAmount;
    }

    public function unFill(int $unFillAmount = 1): void
    {
        $newAmount = $this->amount-=$unFillAmount;
        $minAmount = 0;

        if($newAmount <= $minAmount){
            $newAmount = $minAmount;
        }
        $this->amount = $newAmount;
    }
}