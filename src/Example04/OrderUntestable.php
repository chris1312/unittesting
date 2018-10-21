<?php

namespace MyProject\Example04;

class OrderUntestable
{
    /** @var string[] */
    private $products = [];
    /** @var int */
    private $orderNumber;

    public function addProduction(string $productName): void
    {
        $this->products[] = $productName;
    }

    public function finalize()
    {
        $this->orderNumber = StaticRandomNumberGenerator::next();
    }

    public function toString(): string
    {
        return sprintf(
            'Your order number is #%s. Your products are: %s',
            $this->orderNumber,
            implode(', ', $this->products)
        );
    }
}
