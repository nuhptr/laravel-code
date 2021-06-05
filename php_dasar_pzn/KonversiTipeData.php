<?php

// TODO : int -> string
$valueString = (string)100;
var_dump($valueString); // TODO : string(3) "100"

// TODO : string -> int
$valueInt = (int)"100";
var_dump($valueInt); // TODO : int(100)

$valueFloat = (float)"1.01";
var_dump($valueFloat); // TODO : float(1.01)

// TODO : Mengakses Karakter
$name = "Adi";
echo $name[0] .PHP_EOL; // A
echo $name[1] .PHP_EOL; // d
echo $name[2] .PHP_EOL; // i

