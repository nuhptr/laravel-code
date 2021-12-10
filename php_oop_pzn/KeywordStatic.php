<?php

class MathHelper
{
    /** @var string
     * TODO : static properties
     */
    static public string $name = "MathHelper";

    /** TODO: static function
     */
    static public function sum(int...$number): int
    {
        $total = 0;
        foreach ($number as $item) {
            $total += $item;
        }
        return $total;
    }
}

echo MathHelper::$name . PHP_EOL; // MathHelper

$result = MathHelper::sum(10, 20, 30, 40);
echo "Result : $result" . PHP_EOL; // Result : 100