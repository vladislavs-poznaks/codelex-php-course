<?php

class Product {

    protected $name;
    protected $price;
    protected $amount;

    public function __construct($name, $price, $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function print_product() {
        echo "$this->name, price $this->price, amount $this->amount\n";
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

}

$logitech_mouse = new Product("Logitech mouse", 70.00, 14);
$apple_phone = new Product("iPhone 5s", 999.99, 3);
$epson_printer = new Product("Epson EB-U05", 440.46, 1);

$logitech_mouse->print_product();
$apple_phone->print_product();
$epson_printer->print_product();

$apple_phone->setPrice(499.99);
$epson_printer->setAmount(10);

$logitech_mouse->print_product();
$apple_phone->print_product();
$epson_printer->print_product();