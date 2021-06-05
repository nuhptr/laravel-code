<?php

class Person
{
    // TODO : Properties
    var string $name = "no name"; // TODO : type declaration in field
    var ?string $address = null; // TODO : use ? to allow null
    var ?string $country = null;

    // TODO : create a constructor
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // TODO : const field
    const AUTHOR = "Adi Nugraha Putra";

    // TODO: Using this keyword
    function sayHello(?string $you)
    {
        if (is_null($you)) {
            echo "Hi, My name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hello $you, my name is {$this->name}" . PHP_EOL;
        }
    }

    // TODO : self Keyword untuk memanggil constant kelas dirinya sendiri
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    // TODO : function destructor
    function __destruct()
    {
        echo "Object person $this->name is destroyed" .PHP_EOL;
    }
}
