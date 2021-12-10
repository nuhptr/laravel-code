<?php

// TODO : Mengubah data array
$values = array(1,2,3,4); // indeks 0-3
$values[0] = 0;
var_dump($values);
// [0] => int(0), dst...

// TODO : menghapus data array
unset($values[1]); // data array indeks ke-1 akan hilang
var_dump($values);
// [0] => int(0), [2] => int(3), dst...

// TODO : Menambahkan data array
$array = ["Adi", "Nugraha"];
$array[] = "Putra"; // Menambahkan data
var_dump($array);

// TODO : Menghitung jumlah array dari 1
var_dump(count($array)); // int(3)
