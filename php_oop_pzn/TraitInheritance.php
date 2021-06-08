<?php

trait SaySomething
{
    public abstract function say();
}

trait GoRun
{
    public function run(?string $name)
    {
        if (is_null($name)) {
            echo "Run!" . PHP_EOL;
        } else {
            echo "$name is run" . PHP_EOL;
        }
    }
}

/** TODO : trait ini bisa untuk menggabungkan semua trait dan
 *         menurunkan function atau propertiesnya
 */
trait All
{
    use SaySomething, GoRun;
}

class Human
{
    use All;

    public function say()
    {
        // TODO: Implement say() method.
    }
}


