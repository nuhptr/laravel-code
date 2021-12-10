<?php

$absen = 90;
$nilai = 75;

if ($nilai >= 75 && $absen >= 75) { // di execute, karena sesuai
    echo "Anda lulus" .PHP_EOL;
}
// jika ada yang tidak sesuai blok ini akan di execute
else {
    echo "Anda tidak lulus". PHP_EOL;
}
