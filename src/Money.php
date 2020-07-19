<?php
namespace Money;

class Money
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): self
    {
        return new static($this->amount * $multiplier, $this->currency);
    }

    public function currency(): string
    {
        return $this->currency;
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
}
