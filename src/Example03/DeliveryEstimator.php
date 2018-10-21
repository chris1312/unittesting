<?php

namespace MyProject\Example03;

use DateTimeImmutable;

class DeliveryEstimator
{
    public function estimateDays(): int
    {
        $now = new DateTimeImmutable();

        $tuesday = 2;
        $saturday = 6;
        $dayOfWeek = $now->format('N'); // 1 - Monday, 2 - Tuesday, ...

        if ($dayOfWeek > $tuesday) {
            $days = 5;
        } elseif ($dayOfWeek == $saturday) {
            $days = 4;
        } else {
            $days = 3;
        }

        return $days;
    }
}
