<?php

$data = [
    "action" => "Create",
];
// TODO : mengembalikan -> true ?? false
$action = $data['action'] ?? 'nothing';

echo $action. PHP_EOL; // Create