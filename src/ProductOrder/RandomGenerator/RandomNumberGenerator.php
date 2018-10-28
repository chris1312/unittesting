<?php

namespace MyProject\ProductOrder\RandomGenerator;

class RandomNumberGenerator
    implements GeneratorInterface
{
    public function next(): int
    {
        return rand(1, 5);
    }
}
