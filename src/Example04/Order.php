<?php

namespace MyProject\Example04;

use MyProject\Example04\RandomGenerator\GeneratorInterface;

class Order
{
    /** @var string[] */
    private $products = [];
    /** @var int */
    private $orderNumber;
    /** @var GeneratorInterface */
    private $orderNumberGenerator;

    public function __construct(GeneratorInterface $orderNumberGenerator)
    {
        $this->orderNumberGenerator = $orderNumberGenerator;
    }

    public function addProduction(string $productName): void
    {
        $this->products[] = $productName;
    }

    public function finalize(): void
    {
        $this->orderNumber = $this->orderNumberGenerator->next();
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
