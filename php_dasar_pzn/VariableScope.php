<?php

$name = "Adi Nugraha Putra";

function sayHai() {
    global $name; // global keyword to use global variabel
    echo "hello $name" .PHP_EOL;
}

sayHai();
