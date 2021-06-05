<?php

// TODO : operator ( +, -, *, /, %, **)
$a = 10;
$b = 20;

$result = $a + $b;
var_dump($result);

// TODO : negative result
$resultNegative = -$result;
var_dump($resultNegative); // int(-30)

// TODO : positive result
$resultPositif = +$result;
var_dump($resultPositif); // int(30)

// TODO : operation pangkat
$resultPangkat = $a**2;
var_dump($resultPangkat); // int(100)

// TODO : modulo
$resultModulo = $b % 2;
var_dump($resultModulo); // int(0)
