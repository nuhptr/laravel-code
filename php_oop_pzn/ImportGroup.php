<?php

require_once "data\NamespaceHelper.php";
require_once "data\NamespaceConflict.php";

// TODO : Import group using -> {}
use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict =new Conflict1();
$dummy = new Dummy();
$sample = new Sample();
