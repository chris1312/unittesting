<?php

namespace MyProjectTest\Example01;

use MyProject\Example01\AreaCalculator;
use PHPUnit\Framework\TestCase;

class AreaCalculatorTest extends TestCase
{
    public function testArrayOfSquare(): void
    {
        $expected = 9;

        $calculator = new AreaCalculator();

        $actual = $calculator->areaOfSquare(3);

        $this->assertSame($expected, $actual);
    }
}
