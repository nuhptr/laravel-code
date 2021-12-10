<?php

function hello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function filterName(string $name): string
{
    return "Sample $name";
}

// TODO : membuat variabel dengan isi function yang sesuai
$filterName = "filterName";
$strLower = "strToLower";
hello("Adi", $filterName);
hello("ADI", $strLower);
