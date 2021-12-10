<?php /** @noinspection ALL */

class Shop
{
    var ?string $name = null;
    var ?int $price = 0;

    // TODO : Constructor utama
    public function __construct(?string $name, ?int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class Reseller extends Shop
{
    /**  TODO : merubah ovveriding contructor
     *          boleh tapi jika argument tidak disarankan
     * */
    public function __construct(?string $name)
    {
        parent::__construct($name, 1000000);
    }
}
