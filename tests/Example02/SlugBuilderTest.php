<?php

namespace MyProjectTest\Example02;

use MyProject\Example02\SlugBuilder;
use PHPUnit\Framework\TestCase;

class SlugBuilderTest extends TestCase
{
    /** @var SlugBuilder */
    private $slugBuilder;

    protected function setUp()
    {
        // arrange
        $this->slugBuilder = new SlugBuilder();
    }

    public function testSlugifyReplaceSpaceWithDash(): void
    {
        // act
        $actual = $this->slugBuilder->slugify('my text');

        // assert
        $this->assertSame('my-text', $actual);
    }

    public function testSlugifyConvertToLowerCase(): void
    {
        // act
        $actual =  $this->slugBuilder->slugify('My text');

        // assert
        $this->assertSame('my-text', $actual);
    }

    public function testSlugifyConvertUnicodeToLatin(): void
    {
        // act
        $actual =  $this->slugBuilder->slugify('ŽALIA');

        // assert
        $this->assertSame('zalia', $actual);
    }

    public function testSlugifyWhenTextIsEmpty(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Text cannot be empty');
        $this->slugBuilder->slugify('');
    }
}
