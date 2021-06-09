<?php /** @noinspection ALL */

function eatFood(string $name, int $price = 0, int $quantity)
{
    echo "Hello this food is $name, the price is $price, and stock is $quantity" . PHP_EOL;
}

// TODO -> Bisa memanggil name dan quantity saja
eatFood(name: "Pizza", quantity: 20);
