<?php

namespace MyProjectTest\Example05;

use MyProject\Example05\OrderUntestable;
use PHPUnit\Framework\TestCase;

class OrderUntestableTest extends TestCase
{
    public function testStringRepresentationOfOrder(): void
    {
        $expected = 'Your order number is #3. Your products are: apple, orange';
        $order = new OrderUntestable();
        $order->addProduction('apple');
        $order->addProduction('orange');
        $order->finalize();

        $this->assertSame($expected, $order->toString());
    }
}
