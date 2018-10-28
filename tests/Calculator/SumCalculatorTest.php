<?php

namespace MyProjectTest\Calculator;

use MyProject\Calculator\SumCalculator;
use PHPUnit\Framework\TestCase;

class SumCalculatorTest extends TestCase
{
    /** @var SumCalculator */
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new SumCalculator();
    }

    protected function tearDown()
    {
        $this->calculator = null;
    }

    public function testSum(): void
    {
        $expected = 5;

        $a = 2;
        $b = 3;

        $actual = $this->calculator->sum($a, $b);

        $this->assertSame($expected, $actual);
    }
}
