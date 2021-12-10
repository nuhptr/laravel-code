<?php

$name = "Adi";
$name = null;

$age = null;

echo  "Name : $name";
echo "\n";

echo  "Age : $age";
echo "\n";

// TODO :  Mengecek apakah data null 1 (true) / 0 (false)
$isNull = is_null($name);
echo "Is Name Null? : ";
var_dump($isNull); // bool(true)

// TODO : Menghapus variabel dengan unset
$contoh = "Eko";
unset($contoh);

// TODO : menegaskan variabel $contoh
var_dump(isset($contoh)); // bool(false)

// TODO: echo $contoh; sudah tidak bisa menggunakan variabel tersebut

