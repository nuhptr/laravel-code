<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

/** TODO : Function Argument Polymorphism
 *         example : sayHello(Programmer $programmer) {}
 *         semua turunan Programmer bisa digunakan di param itu
 * */
function sayHelloProgrammer(Programmer $programmer) // argument
{
    /** TODO :  Type check & cast
     *          jika masih dalam satu turunan
     *          maka bisa dicek menggunakan instanceof
     * */

    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}

$company = new Company();
$company->programmer = new BackendProgrammer("Adi");
var_dump($company);

$company->programmer = new FrontendProgrammer("Adi");
var_dump($company);

sayHelloProgrammer(new BackendProgrammer("Adi")); // Hello Backend Programmer Adi