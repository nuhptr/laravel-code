<?php

// TODO : menampilkan data satu persatu
$names = ["Eko", "Kurniawan", "Khannedy"];

foreach ($names as $name) :
    echo "data $name" . PHP_EOL;
endforeach;

// TODO : forech dengan key
echo PHP_EOL;

$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach ($person as $key => $value) {
    echo "$key : $value" .PHP_EOL;
}
