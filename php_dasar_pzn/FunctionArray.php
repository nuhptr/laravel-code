<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);

foreach ($dataResult as $item) {
    echo $item .PHP_EOL; // the result has multiplication by 10
}

// TODO : reverse sort
rsort($data);
var_dump($data);

// TODO : get the array key or value
var_dump(array_keys($data));
var_dump(array_values($data));
