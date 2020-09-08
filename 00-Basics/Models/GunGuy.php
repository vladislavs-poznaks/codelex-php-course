<?php


class GunGuy
{
    public  $name;
    public $cash;
    public $licenses = [];

    public function __construct($name, $cash, array $licenses)
    {
        $this->name = $name;
        $this->cash = $cash;
        $this->licenses = $licenses;
    }

}