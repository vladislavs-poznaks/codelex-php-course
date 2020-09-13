<?php

class SavingsAccount
{
    protected $balance;
    protected $interest;

    public function __construct($balance, $interest)
    {
        $this->balance = $balance;
        $this->interest = $interest;
    }

    function getBalance() {
        return $this->balance;
    }

    function getInterest() {
        return $this->interest;
    }

    function withdraw($amount) {
        $this->balance -= $amount;
    }

    function deposit($amount) {
        $this->balance += $amount;
    }

    function addMonthlyInterest() {
        $interestEarned = $this->balance * ($this->interest / 12);
        $this->balance += $interestEarned;
        return $interestEarned;
    }

}

$balance = readline("How much money is in the account: ");
$balance = floatval($balance);

$interest = readline("Enter the annual interest rate: ");
$interest = floatval($interest);

$months = readline("How long has the account been opened: ");
$months = floatval($months);

$account = new SavingsAccount($balance, $interest);

$totalDeposited = 0;
$totalWithdrawn = 0;
$totalInterestEarned = 0;

for ($i = 1; $i <= $months; $i++) {
    $amountToDeposit = readline("Enter amount deposited for month: $i: ");
    $account->deposit(floatval($amountToDeposit));
    $totalDeposited += $amountToDeposit;

    $amountToWithdraw = readline("Enter amount withdrawn for month: $i: ");
    $account->withdraw(floatval($amountToWithdraw));
    $totalWithdrawn += $amountToWithdraw;

    $totalInterestEarned += $account->addMonthlyInterest();
}

echo "\n\n";
echo "Total deposited: $$totalDeposited\n";
echo "Total deposited: $$totalWithdrawn\n";
echo "Total interest earned: $" . round($totalInterestEarned, 2) . "\n";
echo "Ending balance: $" . round($account->getBalance(), 2) . "\n";