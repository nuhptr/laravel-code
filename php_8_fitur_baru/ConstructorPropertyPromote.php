<?php /** @noinspection ALL */

class Product
{
    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0,
                                public int $quantity = 0,
                                private bool $expensive = false)
    {

    }
}

$product = new Product(id: "1", name: "Gula", price: 20000, quantity: 10, expensive: true);
echo $product->name. PHP_EOL; // Gula