<?php
/**
 * TODO : Union => + , identity => === , inequality => !=
 * TODO : Equal => ==, inequality => <> , nonidentical => !==
 */

// TODO : Union
$first = [
  "first_name" => "Adi"
];

$last = [
    "first_name" => "Budi", // di ignore
    "last_name" => "Nugraha"
];

$full = $first + $last;
var_dump($full);

// TODO : equal and identity check
$a =[
    "first" => "Adi",
    "last" => "Nugraha"
];

$b = [
    "last" => "Nugraha",
    "first" => "Adi"
];

$equal = $a == $b;
var_dump($equal); // TODO : true

$identity = $a === $b;
var_dump($identity); // TODO : false