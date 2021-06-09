<?php

function sayHai(?string $name)
{
    if ($name == null) {
        throw new Exception("Tidak boleh null");
    }

    echo "Hello $name" . PHP_EOL;
}

// TODO -> throw expression in ternary operator
function sayHaiExpression(?string $name)
{
    $result = $name != null ? "hello $name" : throw new Exception("tidak boleh null");
    echo $result . PHP_EOL;
}

try {
    sayHaiExpression("Adi");
} catch (Exception $e) {
    echo $e . PHP_EOL;
}
