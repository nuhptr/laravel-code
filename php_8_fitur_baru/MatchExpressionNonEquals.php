<?php

// TODO -> jika tidak sama
$value = 80;

$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    default => "E"
};

echo "Nilai $value" . PHP_EOL; // Nilai 80