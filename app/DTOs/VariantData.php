<?php

namespace App\DTOs;

class VariantData extends BaseDTO
{
    public function __construct(
        public string $name,
        public int $productId,
        public float $price,
    ) {}
}
