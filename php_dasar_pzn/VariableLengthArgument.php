<?php

// TODO : ...$variable -> membuat bisa menerima banyak value
function sumAll(...$value)
{
    $total = 0;
    foreach ($value as $item) {
        $total += $item;
    }

    echo "Total " . implode(" + ", $value) . " = $total"
        . PHP_EOL;
}

sumAll(10,20,30,40);
