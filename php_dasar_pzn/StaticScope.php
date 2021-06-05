<?php

function increment() {
    static $counter = 1;
    echo "Counter : $counter" .PHP_EOL;
    $counter++;
}

increment(); // 1
increment(); // 2
increment(); // 3
