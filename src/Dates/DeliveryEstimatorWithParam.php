<?php

namespace MyProject\Dates;

use DateTimeInterface;

class DeliveryEstimatorWithParam
{
    public function estimateDays(DateTimeInterface $now): int
    {
        $tuesday = 2;
        $saturday = 6;
        $dayOfWeek = (int)$now->format('N'); // 1 - Monday, 2 - Tuesday, ...

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
