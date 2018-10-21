<?php

namespace MyProjectTest\Example05;

use MyProject\Example05\Order;
use MyProject\Example05\RandomGenerator\FakeGenerator;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testStringRepresentationOfOrder(): void
    {
        $expected = 'Your order number is #3. Your products are: apple, orange';

        $orderNumberGenerator = new FakeGenerator();
        $orderNumberGenerator->setNextValue(3);


        $order = new Order($orderNumberGenerator);
        $order->addProduction('apple');
        $order->addProduction('orange');
        $order->finalize();

        $this->assertSame($expected, $order->toString());
    }
}
