<?php

namespace Data;

/** TODO : abstract class cannot make to a object
 *         example : $location = new Location() error
 * */
abstract class Location
{
    public ?string $name = null;

    // TODO : abstract function -> must be override
    public abstract function info();
}

class City extends Location
{
    var ?string $village;
    var int $longitude;
    var int $latitude;

    public function __construct($name, $village, float $longitude, float $latitude)
    {
        $this->name = $name;
        $this->village = $village;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function info()
    {
        echo "Name President : {$this->name}" . PHP_EOL;
        echo "Village : $this->village" . PHP_EOL;
        echo "Longitude : $this->longitude" . PHP_EOL;
        echo "Latitude : $this->latitude" . PHP_EOL;
    }
}

$londonCity = new City("Wiliam King", "London", 2121, 999);
$londonCity->info();
