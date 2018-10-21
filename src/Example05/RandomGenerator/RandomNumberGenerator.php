<?php

namespace MyProject\Example05\RandomGenerator;

class RandomNumberGenerator implements GeneratorInterface
{
    public function next(): int
    {
        return rand(1, 5);
    }
}
