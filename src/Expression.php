<?php
namespace Money;
require_once('src/Money.php');
require_once('src/Bank.php');

interface Expression
{
    public function times(int $multiplier): Expression;

    public function plus(Expression $addend): Expression;

    public function reduce(Bank $bank, string $to): Money;
}
