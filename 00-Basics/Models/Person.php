<?php


class Person
{
    public $name;
    public $surname;
    public $age;
    public $birthday;

    public function __construct($name, $surname, $age, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->birthday = $birthday;
    }
}