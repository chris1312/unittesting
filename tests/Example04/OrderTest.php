<?php

namespace MyProjectTest\Example04;

use MyProject\Example04\Order;
use MyProject\Example04\RandomGenerator\FakeGenerator;
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
