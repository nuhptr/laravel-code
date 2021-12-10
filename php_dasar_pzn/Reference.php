<?php

$number = 1;

// TODO : reference ke variable number si otherNumber -nya
$otherNumber = &$number;
$otherNumber = 2;

echo $otherNumber .PHP_EOL;

// TODO : pass by reference
function increment(int &$value) {
    $value++;
}

$counter = 1;
increment($counter);
echo "counter : $counter" .PHP_EOL; // counter : 2

// TODO : return reference
function &getValue(): int
{
    static $value = 100;
    return $value;
}

// variable $a sebenernya nunjuk ke $value di &getValue
$a = &getValue();
$a = 200;

$b = &getValue();
echo $b .PHP_EOL; // 200 (wah ada yang ngubah nih)