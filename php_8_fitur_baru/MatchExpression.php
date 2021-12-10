<?php

/** TODO : Sebuah fungsi baru menggantikan switch case
 *         cocok untuk case sederhana seperti ternary operator
 */

$value = "A";

$result = match ($value) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda tidak lulus",
    "E" => "Sepertinya anda salah jurusan",
    default => "Nilai apa itu?"
};

echo $result . PHP_EOL; // Anda lulus