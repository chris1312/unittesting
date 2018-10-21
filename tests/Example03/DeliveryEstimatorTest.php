<?php

namespace MyProjectTest\Example03;

use MyProject\Example03\DeliveryEstimator;
use PHPUnit\Framework\TestCase;

class DeliveryEstimatorTest extends TestCase
{
    /** @var DeliveryEstimator */
    private $estimator;

    protected function setUp()
    {
        $this->estimator = new DeliveryEstimator();
    }

    public function testEstimateDaysWhenKDeliveryIsInThreeDays(): void
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
