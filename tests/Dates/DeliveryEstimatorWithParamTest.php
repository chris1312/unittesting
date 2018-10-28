<?php

namespace MyProjectTest\Dates;

use DateTimeImmutable;
use MyProject\Dates\DeliveryEstimatorWithParam;
use PHPUnit\Framework\TestCase;

class DeliveryEstimatorWithParamTest extends TestCase
{
    /** @var DeliveryEstimatorWithParam */
    private $estimator;

    protected function setUp()
    {
        $this->estimator = new DeliveryEstimatorWithParam();
    }

    public function testEstimateDaysWhenDeliveryIsInThreeDays(): void
    {
        $now = new DateTimeImmutable('2018-10-29');
        $this->assertSame(3, $this->estimator->estimateDays($now));
    }

    public function testEstimateDaysWhenDeliveryIsInFourDays(): void
    {
        $now = new DateTimeImmutable('2018-10-27');
        $this->assertSame(4, $this->estimator->estimateDays($now));
    }

    public function testEstimateDaysWhenDeliveryIsInFiveDays(): void
    {
        $now = new DateTimeImmutable('2018-10-31');
        $this->assertSame(5, $this->estimator->estimateDays($now));
    }
}
