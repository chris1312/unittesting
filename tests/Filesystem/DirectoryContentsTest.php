<?php

namespace MyProjectTest\Filesystem;

use MyProject\Filesystem\DirectoryContents;
use PHPUnit\Framework\TestCase;

class DirectoryContentsTest extends TestCase
{
    public function testListContents()
    {
        $directoryContents = new DirectoryContents();
        $sum  = $directoryContents->calculateFileSize('/var/www/external/unittesting/files/');

        $this->assertSame(12, $sum);
    }
}
