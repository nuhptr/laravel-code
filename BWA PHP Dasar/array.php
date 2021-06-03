<?php

// indexed array
$a = ["a", "b", "c"];
var_dump($a);

//assosiative array
$b = [
    'indonesia' => 'nasi padang',
    'malaysia' => "nasi lemak"
];
var_dump($b);

// multidimensional array
$c = [
    'a' => $a,
    'b' => $b,
];
$d = [
    'c' => $c,
    'lainnya' => [1,2,3,4,5]
];

echo $c['a'][1];