<?php
namespace Money;
require_once('src/Money.php');
require_once('src/Pair.php'); // hashMapが使えない関係で実際は使ってないけど...

class Bank
{
    private $rates = [];

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $this->rates["{$from}_{$to}"] = $rate;
    }

    public function rate(string $from, string $to): int
    {
        if ($from == $to) {
            return 1;
        }
        return $this->rates["{$from}_{$to}"];
    }
}
