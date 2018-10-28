<?php

namespace MyProject\ProductOrder\RandomGenerator;

interface GeneratorInterface
{
    public function next(): int;
}
