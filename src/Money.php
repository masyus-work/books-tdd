<?php
namespace Money;
require_once('src/Expression.php');
require_once('src/Sum.php');
require_once('src/Bank.php');

class Money implements Expression
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function equals(Money $object): bool
    {
        return $this->amount == $object->amount && $this->currency() == $object->currency();
    }

    public function toString(): string
    {
        return $this->amount + ' ' + $this->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    public function plus(Expression $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency(), $to);
        return new Money($this->amount() / $rate, $to);
    }
}
