<?php /** @noinspection ALL */

function sayHello(?string $first, ?string $second, ?string $last): void
{
    echo "Hello $first $second $last" .PHP_EOL;
}

/** TODO : Menggunakan named argument */
sayHello(last: "Putra", first: "Adi", second: "Nugraha"); // Hello Adi Nugraha Putra