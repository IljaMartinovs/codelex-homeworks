<?php

class SavingsAccount
{
    private float $aiRate;
    private float $balance;
    private float $deposited=0;
    private float $withdrawn=0;
    private float $aiEarned=0;

    public function __construct(float $balance, float $aiRate)
    {
        $this->balance = $balance;
        $this->aiRate = $aiRate;
    }

    public function removeCash (float $withdrawal): float
    {
        $this->withdrawn += $withdrawal;
        return $this->balance -= $withdrawal;
    }

    public function addCash (float $addedCash): float
    {
        $this->deposited += $addedCash;
        return $this->balance += $addedCash;
    }

    public function Display(): void
    {
        echo "Total deposited: " . number_format($this->deposited,2) . "\n";
        echo "Total withdrawn: " . number_format($this->withdrawn,2) . "\n";
        echo "Interest earned: " . number_format($this->aiEarned,2) . "\n";
        echo "Ending balance: " . number_format($this->balance,2). "\n";
    }

    public function aiRateCalc ()
    {
        $this->aiEarned += $this->balance * $this->aiRate/12;
        $this->balance += $this->balance * $this->aiRate/12;
    }
}

$amount = readline("How much money is in the account?: ");
$rate = readline ("Enter the annual interest rate: ");
$bank = new SavingsAccount($amount,$rate);
$months = readline("How long has the account been opened? ");

for($i=1; $i <= $months; $i++){
    $bank->addCash(readline("Enter amount deposited for $i : "));
    $bank->removeCash(readline("Enter amount withdrawn for $i : "));
    $bank->aiRateCalc();
}
$bank->Display();
