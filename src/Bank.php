<?php
namespace Money;
require_once('src/Money.php');

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return Money::dollar(10);
    }
}
