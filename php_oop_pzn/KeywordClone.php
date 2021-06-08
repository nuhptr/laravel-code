<?php

class Student
{
    var ?string $id;
    var ?string $name;
    var ?int $value;

    public function __construct($id, $name, $value)
    {
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
    }

    // TODO : Memodifikasi hasil clone menggunakan __clone
    public function __clone(): void
    {
        // TODO -> misal menghapus value (uninitialized(?int))
        unset($this->value);
    }
}

$student1 = new Student("1", "Adi", 10);

$student2 = clone $student1;
var_dump($student2); // TODO -> sama dengan student1