<?php

$nilai = "A";

// TODO : bisa menggunakan colon tapi diakhiri endswitch
switch ($nilai) :
    case "A" : // Executed
        echo "Anda Lulus dengan baik" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D" :
        echo "Anda tidak lulus" .PHP_EOL;
        break;
    default :
        echo "Mungkin anda salah jurusan". PHP_EOL;
endswitch;

