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

class DogTest
{
    public array $dogList;

    public function Main()
    {
        $this->dogList[] = new Dog ("Max", "Male");
        $this->dogList[] = new Dog ("Rocky", "Male");
        $this->dogList[] = new Dog ("Sparky", "Male");
        $this->dogList[] = new Dog ("Buster", "Male");
        $this->dogList[] = new Dog ("Sam", "Male");
        $this->dogList[] = new Dog ("Lady", "female");
        $this->dogList[] = new Dog ("Molly", "female");
        $this->dogList[] = new Dog ("Coco", "female");
        //Max
        $this->dogList[0]->motherDog = $this->dogList[5];
        $this->dogList[0]->fatherDog = $this->dogList[1];
        //Coco
        $this->dogList[7]->motherDog = $this->dogList[6];
        $this->dogList[7]->fatherDog = $this->dogList[3];
        //Rocky
        $this->dogList[1]->motherDog = $this->dogList[6];
        $this->dogList[1]->fatherDog = $this->dogList[4];
        //Buster
        $this->dogList[3]->motherDog = $this->dogList[5];
        $this->dogList[3]->fatherDog = $this->dogList[2];

        echo $this->dogList[7]->getFathersName() . PHP_EOL;
        echo $this->dogList[2]->getFathersName() . PHP_EOL;

        echo $this->dogList[7]->HasSameMotherAs($this->dogList[1]) . PHP_EOL;
    }
}
$test = new DogTest();
$test->Main();