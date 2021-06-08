<?php

$dateTime = new DateTime();
$dateTime->setDate(1990, 1, 20);
$dateTime->setTime(10, 10, 10, 10);

/** TODO : Menambahkan tambahan waktu 1 tahun */
$dateTime->add(new DateInterval("P1Y"));

/** TODO : Mengurangi waktu 1 tahun */
$minusOneMount = new DateInterval("P1M");
$minusOneMount->invert = true;
$dateTime->add($minusOneMount);

var_dump($dateTime);
/** TODO : setTimezone daerah tertentu */
$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));

echo "Sekarang jam : " .
    $now->format("Y-m-d H:i:s") . PHP_EOL;
// TODO -> sekarang jam : jam sekarang di daerahmu

