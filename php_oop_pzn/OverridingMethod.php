<?php

class Boss
{
    var string $name;

    function sayHello(?string $name): void
    {
        echo "Hi $name, My name is Boss $this->name" . PHP_EOL;
    }
}

class Member extends Boss
{
    public function sayHello(?string $name): void
    {
        echo "Hi member $name, My name is Boss $this->name" . PHP_EOL;
    }
}

$boss = new Boss();
$boss->name = "Adi";
$boss->sayHello("Irma");

$member = new Member();
$member->name = "Adi";
$member->sayHello("Irma");
