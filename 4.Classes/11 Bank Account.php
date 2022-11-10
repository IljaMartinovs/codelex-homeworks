<?php

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function Display(): string
    {
        return $this->name . " | ".number_format($this->balance,2) . PHP_EOL;
    }

    public function withdrawal(float $money): float
    {
        return $this->balance -= $money;
    }

    public function deposit(float $money): float
    {
        return $this->balance += $money;
    }

    public static function transfer(Account $from, Account $to, float $howMuch): float
    {
        $from->balance -= $howMuch;
        return $to->balance += $howMuch;
    }
}

class AccountStart
{
    public function Main()
    {
        $Matt = new Account( "Matt's account" , 100);
        $My = new Account("My account", 0);
        $Matt->withdrawal(100);
        $My->deposit(100);
        echo $Matt->Display();
        echo $My->Display() . "====================================" . PHP_EOL;

        $A = new Account("Matt's account", 100);
        $B = new Account("My account", 0);
        $C = new Account("C account", 0);
        Account::transfer($A,$B,50);
        Account::transfer($B,$C,25);
        echo "After transfer \n";
        echo "Matt's account balance is now: ". $A->Display();
        echo "My account balance is now: ". $B->Display();
        echo "C account balance is now: ". $C->Display();
    }
}

$start = new AccountStart();
$start->Main();
