<?php

require_once "data\Person.php";

$person = new Person("Adi", "Gadingrejo");
$person->sayHello("Irma"); // Hello Irma, my name is Adi

$person2 = new Person("Joko", "Banten");
$person2->sayHello(null); // Hi, my name is Joko

// TODO : Implemented self keyword
$person2->info(); // Author : Adi Nugraha Putra
