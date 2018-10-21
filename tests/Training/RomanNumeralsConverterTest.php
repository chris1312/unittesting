<?php

namespace MyProjectTest\Training;

use MyProject\Training\RomanNumeralsConverter;
use PHPUnit\Framework\TestCase;

class RomanNumeralsConverterTest extends TestCase
{
    /** @var RomanNumeralsConverter */
    private $converter;

    protected function setUp(): void
    {
        $this->converter = new RomanNumeralsConverter();
    }
}
