<?php

class Product {
    public string $name;
    public float $startPrice;
    public int $amount;

    function __construct( string $name, float $startPrice, int $amount) {
        $this->name=$name;
        $this->startPrice=$startPrice;
        $this->amount=$amount;
    }

    public function printProduct(): string{
        return $this->name . ", price " . $this->startPrice . ", amount " . $this->amount . PHP_EOL;
    }

    public function changeQuantity (int $newAmount): int {
        return $this->amount = $newAmount;
    }

    public function changePrice (float $newStartPrice): float {
            return $this->startPrice = $newStartPrice;
    }

}
$mouse = new Product("Logitech mouse", 70.00 , 14);
$phone = new Product("iPhone 5s", 999.99 , 3);
$stuff = new Product("Epson EB-U05", 440.46 , 1);
echo $mouse->printProduct();
echo $phone->printProduct();
echo $stuff->printProduct();

$phone->changePrice(100);
$phone->changeQuantity(7);
echo $phone->printProduct();