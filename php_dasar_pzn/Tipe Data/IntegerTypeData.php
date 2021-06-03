<?php 

echo 'Decimal : ';
var_dump(1234); // int(1234)

echo 'Octal : ';
var_dump(0123); // int (83)

echo 'Hexadecimal : ';
var_dump(0x1A); // int(26)

echo 'Binary : ';
var_dump(0b111111); // int(63)

// tidak berefek apapun di number hanya supaya mudah dibaca
echo 'undescore di number : ';
var_dump(1_234_567);