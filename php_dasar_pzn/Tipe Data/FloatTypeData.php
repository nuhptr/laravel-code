<?php

echo 'Floating Point : ';
var_dump(1.234); // float(1.234)

echo 'Floating point dengan E notation Plus (1.2 x 1000) : ';
var_dump(1.2e3); // float(1200)

echo 'Floating Point dengan E notation Minus (7 x 0.001) : ';
var_dump(7e-3); // float(0.007)

echo 'Underscore di Floating Point : ';
var_dump(1_234_567); // int(1234567)

// Todo : Integer Overflow
echo 'Integer overflow : ';
var_dump(92233720368547758079999);