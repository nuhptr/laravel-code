<?php

class Category
{
    private string $name;
    private bool $expensive;

    // TODO : Getter
    public function getName(): string
    {
        return $this->name;
    }

    // TODO : Setter
    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}

$category = new Category();
$category->setName("Adi");
echo "Name : " . $category->getName();
