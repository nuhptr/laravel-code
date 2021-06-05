<?php

$nilai = 80;
$absen = 75;

// TODO : Bisa menggunakan colon
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Kamu A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Kamu B" . PHP_EOL; // Executed
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Kamu C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Kamu D" . PHP_EOL;
else :
    echo "Nilai Kamu E" . PHP_EOL;
endif;
