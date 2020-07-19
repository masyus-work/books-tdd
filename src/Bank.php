<?php
namespace Money;
require_once('src/Money.php');
require_once('src/Sum.php');

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }
}
