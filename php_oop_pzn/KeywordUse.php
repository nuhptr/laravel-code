<?php

require_once "data\NamespaceHelper.php";
require_once "data\NamespaceConflict.php";

// TODO : menggunakan use untuk define namespace
use Data\One\Conflict;
// use Data\Two\Conflict; Error tidak bisa walaupun berbeda namespace
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();
$conflict2 = new \Data\Two\Conflict(); // jika langsung disebutkan bisa

helpMe(); // Help Me
echo APPLICATION .PHP_EOL; // Belajar PHP OOP
