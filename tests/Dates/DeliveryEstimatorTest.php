<?php

namespace MyProjectTest\Dates;

use MyProject\Dates\DeliveryEstimator;
use PHPUnit\Framework\TestCase;

class DeliveryEstimatorTest extends TestCase
{
    /** @var DeliveryEstimator */
    private $estimator;

    protected function setUp()
    {
        $this->estimator = new DeliveryEstimator();
    }

    public function testEstimateDaysWhenDeliveryIsInThreeDays(): void
    {
        $this->assertSame(3, $this->estimator->estimateDays());
    }

    public function testEstimateDaysWhenDeliveryIsInFourDays(): void
    {
        $this->assertSame(4, $this->estimator->estimateDays());
    }

    public function testEstimateDaysWhenDeliveryIsInFiveDays(): void
    {
        $this->assertSame(5, $this->estimator->estimateDays());
    }
}
