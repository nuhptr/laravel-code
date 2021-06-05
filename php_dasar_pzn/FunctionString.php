<?php

// TODO : join -> menggabungkan string dengan separator
var_dump(join(",", [1, 2, 3, 4, 5, 6])); // string(11) "1,2,3,4,5,6"

// TODO : explode -> memecah string menjadi array
var_dump(explode(" ", "Adi Nugraha Putra"));
/** array(3) {
[0]=>
string(3) "Adi"
[1]=>
string(7) "Nugraha"
[2]=>
string(5) "Putra"
} */

// TODO : to lower
var_dump(strtolower("ADI"));

// TODO : to upper
var_dump(strtoupper("adi"));

// TODO : trim -> mengabaikan whitespace didepan dan di belakang
var_dump(trim("  Adi Nugraha  "));

// TODO : substr -> mengambil sub string
var_dump(substr("Adi Nugraha Putra", 4, 3)); // nug
