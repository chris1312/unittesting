<?php

namespace MyProject\ProductOrder;

class StaticRandomNumberGenerator
{
    /**
     * @return int
     */
    public static function next(): int
    {
        return rand(1, 3);
    }
}
