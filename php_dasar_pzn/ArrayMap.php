<?php

// TODO : membuat dengan kurung biasa
$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30
);
// TODO: indeks yang merupakan key bertipe string
var_dump($eko);

// TODO : mengambil data berdasarkan id
var_dump($eko["id"]); // string(3) "eko"

// TODO : membuat kurung biasa didalamnya kurung siku
$budi = array([
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35
]);

// TODO : Array In Array menggunakan blok siku
$adi = [
    "id" => "adi",
    "name" => "Adi Nugraha Putra",
    "age" => 21,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
        ]
    ];

var_dump($adi["address"]["city"]); //? cara memanggil si city dari $adi