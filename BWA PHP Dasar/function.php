<?php

function bilangHalo() {
    echo "Hallo". "<br/>";
}

bilangHalo();

function bilangNama($nama) {
    echo "halo, " . $nama . "!<br/>";
}

bilangNama("Adi");

function tambah($a, $b) {
    $total = $a + $b;
    echo $total;
}

tambah(10,20);

