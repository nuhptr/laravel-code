<?php
require_once "data\Person.php";

const APP_VERSION = "1.0.0"; // tidak bisa diubah lagi valuenya

// TODO : cara memanggil constant dari class lain
echo Person::AUTHOR .PHP_EOL; // Adi Nugraha Putra
echo APP_VERSION. PHP_EOL; // 1.0.0
