<?php
/**
 * TODO : trait mirip dengan abstract namun bisa membuat
 * konkrit function atau abstract function
 */

namespace data\traits;

require_once "TraitAbstractFunction.php";

use Part\CanRun;

// TODO : trait Function
trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

// TODO : trait properties
trait hasName
{
    var string $name;
}

class Person
{

    use SayGoodBye, SayHello, hasName, CanRun {
        // TODO : trait visibility
        //        hello as private;
        //        goodBye as private;
    }

    // TODO : hasil override trait abstract function
    public function run(): void
    {
        // TODO: Implement run() method.
        echo "Person $this->name is Run" . PHP_EOL;
    }

    /** TODO : trait override -> jika di trait ada dan disini
     *         di override maka yang disini yang diutamakan
     * */
    public function hello(?string $name): void
    {
        echo "Hello in person" . PHP_EOL;
    }
}


$person = new Person();
$person->hello("Irma"); // Hello Irma
$person->goodBye("Adi"); // Good Bye Adi

$person->name = "Adi"; // set name to Adi
var_dump($person);

$person->run(); // Person Adi is Run
