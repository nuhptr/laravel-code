<?php

require_once "data\Product.php";

$product = new Product("Apple", "10000000");

// echo $product->price .PHP_EOL; price has private member

// TODO :menggunakan function getter di class Product
echo $product->getPrice() . PHP_EOL;
echo $product->getName() . PHP_EOL;

// TODO : Protected access
$dummy = new ProductDummy("Dummy", "1000");
$dummy->info() . PHP_EOL;