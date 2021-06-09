<?php

class Example
{
    // TODO -> bisa memasukan banyak tipe data (union)
    public string|int|bool|array|null $data;
}

$example = new Example();
echo $example->data = "Name" . PHP_EOL;
echo $example->data = null . PHP_EOL;
//echo $example->data = [] . PHP_EOL;
echo $example->data = true . PHP_EOL;
echo $example->data = 100 . PHP_EOL;

echo PHP_EOL;

// TODO -> union type di param dan return type
function sampleFunction(string|null|int $data): string|int|null
{
    if (is_null($data)) {
        echo "Kosong woi" . PHP_EOL;
    } else if (is_int($data)) {
        echo "int $data" . PHP_EOL;
    } else if (is_string($data)) {
        echo "string $data" . PHP_EOL;
    }
}

sampleFunction("Eko"); // string eko
sampleFunction(100); // int 100