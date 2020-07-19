<?php
namespace Money;

require_once('src/Money.php');

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
