<?php

namespace MyProject\ProductOrder\RandomGenerator;

class FakeGenerator
    implements GeneratorInterface
{
    private $nextValue = 0;

    public function setNextValue(int $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    public function next(): int
    {
        return $this->nextValue;
    }
}
