<?php


class Gun
{
    public $name;
    public $price;
    public $license;

    public function __construct($name, $price, $license)
    {
        $this->name = $name;
        $this->price = $price;
        $this->license = $license;
    }

}