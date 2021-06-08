<?php

interface HelloWorld
{
    function sayHello(): void;
}

/** @var TODO :  class yang dimasukan ke dalam variable */
$helloWorld = new class("Adi") implements HelloWorld {
    private ?string $name;

    /** TODO : Constructor di Anonymous function */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello(); // Hello World