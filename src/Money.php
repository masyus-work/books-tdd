<?php
namespace Money;

abstract class Money
{
    protected $amount;

    abstract public function times(int $multiplier);

    public function equals(Money $object): bool
    {
        return $this->amount == $object->amount && get_class($this) === get_class($object);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }
}
