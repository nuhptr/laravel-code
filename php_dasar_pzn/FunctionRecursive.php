<?php

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) :
        $total *= $i;
    endfor;

    return $total;
}

var_dump(factorialLoop(6)); // int(720)

// TODO : Factorial Recursive
function factorialRecursive(int $value) {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(6)); // int(720)
