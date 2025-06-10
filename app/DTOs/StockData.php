<?php

namespace App\DTOs;

class StockData extends BaseDTO
{
    public function __construct(
        public string $name,
        public float $quantity,
        public int $productID,
        public string $variantID
    ) {}
}
