<?php

require_once "data\Manager.php";

// TODO : Inheritance dengan class Manager
class VicePresident extends Manager {

}

$manager = new Manager("Joko");
$manager->sayHello("Vivi"); // Hai Vivi from Joko

$vp = new VicePresident("Adi");
$vp->sayHello("Vivi"); // Hai Vivi from Adi
