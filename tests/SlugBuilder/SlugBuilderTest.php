<?php

namespace MyProjectTest\SlugBuilder;

use MyProject\SlugBuilder\SlugBuilder;
use PHPUnit\Framework\TestCase;

class SlugBuilderTest extends TestCase
{
    /** @var SlugBuilder */
    private $slugBuilder;

    protected function setUp()
    {
        $this->slugBuilder = new SlugBuilder();
    }

    public function testSlugifyReplaceSpaceWithDash(): void
    {
        $actual = $this->slugBuilder->slugify('my text');
        $this->assertSame('my-text', $actual);
    }

    public function testSlugifyConvertToLowerCase(): void
    {
        $actual =  $this->slugBuilder->slugify('Text');
        $this->assertSame('text', $actual, 'Expected string should be in lowercase');
    }

    public function testSlugifyConvertUnicodeToLatin(): void
    {
        $actual =  $this->slugBuilder->slugify('ŽALIA');
        $this->assertSame('zalia', $actual);
    }

    public function testSlugifyWhenTextIsEmpty(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Text cannot be empty');
        $this->slugBuilder->slugify('');
    }
}
