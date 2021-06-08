<?php

/** TODO : Mengubah array ke object dan
 *         key nya menjadi properties
 */
$array = [
    "firstName" => "Eko",
    "middleName" => "Kurniawan",
    "lastName" => "Khannedy"
];

$object = (object)$array;

// TODO : menggunakan keynya seperti mengakses properties
echo $object->firstName . PHP_EOL;
echo $object->middleName . PHP_EOL;
echo $object->lastName . PHP_EOL;

/** TODO : Convert menjadi class array kembali */
$arrayLagi = (array) $object;
var_dump($arrayLagi);
