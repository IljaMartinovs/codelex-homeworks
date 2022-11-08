<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function ShowUserNameAndBalance(): string
    {
        if($this->balance<0)
        {
            $dollar = "$";
            $balanceArray = str_split(number_format($this->balance,2));
            $save = $balanceArray[0];
            $balanceArray[0]=$dollar;
            return $this->name . ", $save" . implode("",$balanceArray);;
        }
        return $this->name. ", $" . number_format($this->balance,2);
    }
}
$ben = new BankAccount("Benson", -17.5);
echo $ben->ShowUserNameAndBalance();

