<?php
namespace Money;
require_once('src/Money.php');

interface Expression
{
    public function reduce(string $to): Money;
}
