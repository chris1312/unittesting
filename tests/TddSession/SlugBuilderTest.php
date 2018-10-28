<?php

namespace MyProjectTest\TddSession;

use MyProject\TddSession\SlugBuilder;
use PHPUnit\Framework\TestCase;

class SlugBuilderTest extends TestCase
{
    /** @var SlugBuilder */
    private $slugBuilder;

    protected function setUp()
    {
        $this->slugBuilder = new SlugBuilder();
    }

}
