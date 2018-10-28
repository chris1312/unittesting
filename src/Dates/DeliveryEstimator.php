<?php

namespace MyProject\Dates;

use DateTimeImmutable;

class DeliveryEstimator
{
    public function estimateDays(): int
    {
        $now = new DateTimeImmutable();

        $tuesday = 2;
        $saturday = 6;
        $dayOfWeek = $now->format('N'); // 1 - Monday, 2 - Tuesday, ...

        if ($dayOfWeek == $saturday) {
            $days = 4;
        } elseif ($dayOfWeek > $tuesday) {
            $days = 5;
        } else {
            $days = 3;
        }

        return $days;
    }
}
