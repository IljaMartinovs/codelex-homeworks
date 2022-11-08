<?php

class EnergyDrinks
{
    private int $surveyed;
    private float $purchased_energy_drinks;
    private float $prefer_citrus_drinks;

    public function __construct (int $surveyed, float $purchased_energy_drinks, float $prefer_citrus_drinks)
    {
        $this->surveyed = $surveyed;
        $this->purchased_energy_drinks = $purchased_energy_drinks;
        $this->prefer_citrus_drinks = $prefer_citrus_drinks;
    }

    public function calculate_energy_drinkers(): int
    {
        return $this->surveyed * $this->purchased_energy_drinks;
    }

    public function calculate_prefer_citrus(): int
    {
        return ($this->surveyed * $this->purchased_energy_drinks) * $this->prefer_citrus_drinks;
    }

    public function DisplaySurveyed(): int
    {
        return $this->surveyed;
    }

}

$energy = new EnergyDrinks(12467,0.14,0.64);
echo "Total number of people surveyed " .  $energy->DisplaySurveyed() . "\n";
echo "Approximately " . $energy->calculate_energy_drinkers() . " bought at least one energy drink\n";
echo $energy->calculate_prefer_citrus() . " of those prefer citrus flavored energy drinks.";
