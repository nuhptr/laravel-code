<?php

// TODO : Function Return biasa
function sum(int $first, int $second): int
{
    return $first + $second;
}

echo sum(10, 30) .PHP_EOL; // 40

// TODO : Function return multiple condition with type declaration
function getFinalValue(int $value): string
{
    if ($value >= 80) :
        return "A";
    elseif ($value >= 70) :
        return "B";
    elseif ($value >= 60) :
        return "C";
    elseif ($value >= 50) :
        return "D";
    else: return "E";
    endif;
}

$score = getFinalValue(100); // A
var_dump($score); // string(1) "A"
