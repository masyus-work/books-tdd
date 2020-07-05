<?php

namespace Money;

require_once('src/Dollar.php');

use PHPUnit\Framework\TestCase;
use Money\Dollar;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

}
