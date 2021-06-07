<?php

$product = new Product("Apple", "10000000");

// echo $product->price .PHP_EOL; price has private member

// TODO :menggunakan function getter di class Product
echo $product->getPrice() . PHP_EOL;
echo $product->getName() . PHP_EOL;

// TODO : Protected access
$dummy = new ProductDummy("Dummy", "1000");
$dummy->info() . PHP_EOL;


class Product
{
    // TODO : keyword visibiity public, private, protected
    private string $name;
    protected int $price;

    public function __construct(?string $name, ?int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    // TODO : ketika membuat suatu private member biasakan buat getter/setter
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}

class ProductDummy extends Product
{
    public function info()
    {
        echo "Name : {$this->getName()}" . PHP_EOL;
        echo "Price : $this->price" . PHP_EOL;
    }
}