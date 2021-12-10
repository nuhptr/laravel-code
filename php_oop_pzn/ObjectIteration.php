<?php

class Data
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
    /**  TODO : Yang keluar saat dirun adalah first dan second
     *          karena mereka bersifat public */
}
