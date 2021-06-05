<?php

// TODO: Annonymous Function
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");

// TODO : Annonymous sebagai argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" .PHP_EOL;
}

sayGoodBye("dia", function (string $name) {
    return strtoupper($name);
});

// TODO: mengakses variabel dari luar
$firstName = "Adi";
$lastName = "Nugraha";

// using use keyword
$sayHelloAdi = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" .PHP_EOL;
};

$sayHelloAdi(); // Hello Adi Nugraha