<?php
class Dog
{
    public string $name;
    public string $sex;
    public Dog $fatherDog;
    public Dog $motherDog;

    public function __construct(string $name, string $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }

    public function getFathersName(): string
    {
        if (isset($this->fatherDog->name))
            return $this->fatherDog->name;
        return "Unknown";
    }

    public function HasSameMotherAs(Dog $differentDog): bool
    {
        if($this->motherDog===$differentDog->motherDog)
            return true;
        return false;
    }
}