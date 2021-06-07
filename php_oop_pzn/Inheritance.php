<?php

class Manager
{
    var ?string $name = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(?string $you)
    {
        if (is_null($this->name)) {
            return "hi, $this->name" .PHP_EOL;
        } else {
            echo "Hai $you from $this->name" . PHP_EOL;
        }
    }
}

// TODO : Inheritance dengan class Manager
class VicePresident extends Manager {

}

$manager = new Manager("Joko");
$manager->sayHello("Vivi"); // Hai Vivi from Joko

$vp = new VicePresident("Adi");
$vp->sayHello("Vivi"); // Hai Vivi from Adi
