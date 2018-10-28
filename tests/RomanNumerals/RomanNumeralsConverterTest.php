<?php

namespace MyProjectTest\RomanNumerals;

use MyProject\RomanNumerals\RomanNumeralsConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralsConverterTest extends TestCase
{
    /** @var RomanNumeralsConverter */
    private $converter;

    protected function setUp(): void
    {
        $this->converter = new RomanNumeralsConverter();
    }

    /**
     * @param int $input
     * @dataProvider provideNegativeNumbers
     */
    public function testConvertNumberLessThanZero(int $input): void
    {
        $this->expectException(\Exception::class);
        $this->converter->convert($input);
    }

    public function provideNegativeNumbers(): array
    {
        return [
            [-1],
            [-2],
        ];
    }

    public function testConvertNumberLessThanZeroWhenMinusOne(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Number must be larger than 0');
        $this->converter->convert(-1);
    }

    public function testConvertFive(): void
    {
        $this->assertSame('V', $this->converter->convert(5));
    }

    public function testConvertMaxNumberRestriction(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Max number cannot be larget than 4999');
        $this->converter->convert(5000);
    }

    public function testConvertFour(): void
    {
        $this->assertSame('IV', $this->converter->convert(4));
    }
}
