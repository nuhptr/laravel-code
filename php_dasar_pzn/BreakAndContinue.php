<?php

$counter = 1;

while (true) :
    echo "Hello Break : $counter" . PHP_EOL;
    $counter++;

    // TODO : jika sudah lebih dari 10 berhenti
    if ($counter > 10) :
        break;
    endif;
endwhile;

echo PHP_EOL;

for ($count = 0; $count < 20; $count++) :
    // TODO : jika habis dibagi 2 maka di skip
    if ($count % 2 == 0) :
        continue;
    endif;
    echo "Hello Continue : $count" . PHP_EOL;
endfor;
