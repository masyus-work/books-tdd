<?php
namespace Money;

class Pair
{
    private $from;
    private $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to   = $to;
    }

    public function equals(Object $object): bool
    {
        $pair = $object;
        return $this->from == $pair->from && $this->to == $pair->to;
    }

    public function hashCode(): int
    {
        return 0;
    }
}
