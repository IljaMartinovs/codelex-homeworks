<?php

$person = new stdClass();
$person -> name = "Ivars";
$person -> money = 200;
$person -> licenses = ["A", "B", "C"];

function createWeapon(string $name, string $license, int $price): stdClass {
    $weapon = new stdClass();
    $weapon -> name = $name;
    $weapon -> license = $license;
    $weapon -> price = $price;
    return $weapon;
}

$licenseText = implode(',', $person->licenses); // A, B, C

echo "Welcome, {$person->name} ({$person->money}$}  Licenses: [{$licenseText}]";
echo PHP_EOL;

$weapons = [
    createWeapon("glock-18", "A", 100),
    createWeapon("ak-47", "C", 250),
    createWeapon("ump", "E", 170),
    createWeapon("bazooka", "B", 500)
];

foreach($weapons as $key => $weapon) {
    echo "[{$key}] {$weapon->name} ({$weapon->price}) [{$weapon->license}]" . PHP_EOL;
}

$selection = (int)readline('Enter weapon to purchase: '); //saglabaa mainigajaa ko ievadam

$selectedWeapon = $weapons[$selection];

if($person->money < $selectedWeapon->price){
    echo "Nopelni vairak";
    exit;
}

if(! in_array($selectedWeapon->license, $person->licenses)){
    echo "Invalid licenses";
    exit;
}

$person->money -= $selectedWeapon->price;

echo "Paldies par pirkumu {$selectedWeapon->name}";
echo PHP_EOL;

