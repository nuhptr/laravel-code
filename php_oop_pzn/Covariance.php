<?php

require_once 'Contravariance.php';

use Data\AnimalFood;
use Data\Food;

abstract class Animal
{
    var string $name;

    abstract public function eat(AnimalFood $food);
}

class Cat extends Animal
{
    // TODO -> parent nya dijadikan child
    public function eat(AnimalFood $food)
    {
        // TODO: Implement eat() method.
    }
}

class Dog extends Animal
{
    // TODO -> childnya dijadikan parent
    public function eat(Food $food)
    {
        // TODO: Implement eat() method.
    }
}

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

/** TODO : Covariance adalah mengubah
 *         tipe kembalian dari function yang diturunkan
 *         ke yang lebih spesific kembali
 */
class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Animal
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Luna");
echo $cat->name . PHP_EOL; // Luna

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Willy");
echo $dog->name . PHP_EOL; // Willy
