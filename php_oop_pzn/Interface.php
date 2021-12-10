<?php

require_once "InterfaceInheritance.php";

// TODO: Interface sudah otomatis abstract
interface Car extends HasBrand
{
    function drive(): void;

    function getTire(): int;
}

class Avanza implements Car
{

    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): string
    {
        echo "Brand Avanza";
    }
}

$car = new Avanza();
$car->drive(); // Drive Avanza
echo $car->getTire(); // 4