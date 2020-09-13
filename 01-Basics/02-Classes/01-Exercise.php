<?php

class Product
{
    protected $name;
    protected $price;
    protected $amount;

    public function __construct($name, $price, $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function showProduct() {
        return "$this->name, price $this->price, amount $this->amount\n";
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

}

$logitechMouse = new Product("Logitech mouse", 70.00, 14);
$applePhone = new Product("iPhone 5s", 999.99, 3);
$epsonPrinter = new Product("Epson EB-U05", 440.46, 1);

echo $logitechMouse->showProduct();
echo $applePhone->showProduct();
echo $epsonPrinter->showProduct();

$applePhone->setPrice(499.99);
$epsonPrinter->setAmount(10);

echo $logitechMouse->showProduct();
echo $applePhone->showProduct();
echo $epsonPrinter->showProduct();