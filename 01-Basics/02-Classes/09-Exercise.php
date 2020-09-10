<?php

class BankAccount
{
    protected $name;
    protected $balance;

    public function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function showNameAndBalance() {
        if ($this->balance < 0) {
            $value = "-$" . number_format(abs($this->balance), 2);
        } else {
            $value = "$" . number_format($this->balance, 2);
        }

        echo "$this->name, $value\n";
    }

}

$bensonAccount = new BankAccount("Benson", 20);
$bensonAccount->showNameAndBalance();

$bensonAccount->setBalance(17.5);
$bensonAccount->showNameAndBalance();

$bensonAccount->setBalance(-17.5);
$bensonAccount->showNameAndBalance();