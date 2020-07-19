<?php
namespace Money;
require_once('src/Money.php');
require_once('src/Expression.php');
require_once('src/Bank.php');

class Sum implements Expression
{
    public $augend;
    public $addend;

    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->amount() + $this->addend->amount();
        return new Money($amount, $to);
    }
}
