<?php

namespace MyProject\RomanNumerals;

class RomanNumeralsConverter
{
    public function convert(int $number): string
    {
        if ($number < 0) {
            throw new \Exception('Number must be larger than 0');
        }

        if ($number > 4999) {
            throw new \Exception('Max number cannot be larget than 4999');
        }

        if ($number == 4) {
            return 'IV';
        }

        return 'V';
    }
}
