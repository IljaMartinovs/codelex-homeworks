<?php
require_once "Odometer.php";
require_once "FuelGauge.php";
require_once "Car.php";

$car = new Car(
    new FuelGauge(2),
    new Odometer(999990)
);


while($car->getFuelGauge()->getAmount() > 0) {
    echo "We drove 1km" . PHP_EOL;

    $car->drive();
    echo "FuelGauge: {$car->getFuelGauge()->getAmount()} / Odometer: {$car->getOdometer()->getMileage()}";
    echo PHP_EOL;
    sleep(1); // slower show
}
echo "Out of fuel";