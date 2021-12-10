<?php

// TODO : Function Argument
function sayHello($name) {
    echo "Say $name" .PHP_EOL;
}

sayHello("Adi");
sayHello("Kevin");


// TODO: Default argument value
function defaultValue($name = "no name" , $last_name= "") {
    echo "value is $name $last_name" .PHP_EOL;
}

defaultValue();
defaultValue("Adi", "Nugraha");

// TODO : Type Declaration didepan variabel
function sum(int $val1, int $val2) {
    $total = $val1 + $val2;
    echo "Total $val1 + $val2: $total".PHP_EOL;
}

// akan dikonversi otomatis
sum("10", "10");
// sesuai
sum(10,20);
