<?php

class Account
{
    protected $name;
    protected $balance;

    public function __construct($name, $balance = 0.00)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function showInfo()
    {
        return "Account: " . $this->name . ": $" . number_format($this->balance, 2);
    }
    public function balance()
    {
        return $this->balance;
    }
    public function withdrawal($amount)
    {
        $this->balance -= $amount;
    }
    public function deposit($amount)
    {
        $this->balance += $amount;
    }
    public static function transfer(Account $from, Account $to, int $amount)
    {
        $from->withdrawal($amount);
        $to->deposit($amount);
    }
}

$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartos_account->showInfo() . PHP_EOL;
echo $bartos_swiss_account->showInfo() . PHP_EOL;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance() . PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->balance() . PHP_EOL;

echo "Final state" . PHP_EOL;
echo $bartos_account->showInfo() . PHP_EOL;
echo $bartos_swiss_account->showInfo() . PHP_EOL;

$matts_account = new Account("Matt's account", 1000.00);
$my_account = new Account("My account");

$matts_account->withdrawal(100);
$my_account->deposit(100);

echo $matts_account->showInfo() . PHP_EOL;
echo $my_account->showInfo() . PHP_EOL;

$accountA = new Account("A", 100);
$accountB = new Account("B");
$accountC = new Account("C");

echo $accountA->showInfo() . PHP_EOL;
echo $accountB->showInfo() . PHP_EOL;
echo $accountC->showInfo() . PHP_EOL;

echo "Money transfers" . PHP_EOL;
Account::transfer($accountA, $accountB, 50);
Account::transfer($accountB, $accountC, 25);

echo $accountA->showInfo() . PHP_EOL;
echo $accountB->showInfo() . PHP_EOL;
echo $accountC->showInfo() . PHP_EOL;
