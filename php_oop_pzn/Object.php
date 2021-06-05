<?php

require_once "data/Person.php";

// TODO : cara membuat object
$person = new Person("Adi", "Gadingrejo");

// TODO : cara mengassign nilai
$person->country = "Indonesia";
// var_dump($person);

echo "Name : {$person->name}" . PHP_EOL; // Adi
echo "Address : {$person->address}" . PHP_EOL; // Gadingrejo
echo "Country : {$person->country}" . PHP_EOL; // Indonesia