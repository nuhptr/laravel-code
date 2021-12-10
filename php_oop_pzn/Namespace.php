<?php

require_once "data\NamespaceConflict.php";
require_once 'data\NamespaceHelper.php';

// TODO : Cara membuat objectnya
$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

// TODO : cara manggil constant di namespace
echo Helper\APPLICATION .PHP_EOL;

// TODO : cara manggil function di namespace
Helper\helpMe();

