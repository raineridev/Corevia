<?php

namespace App\DTOs\Products;

use App\DTOs\BaseDTO;

class ProductData extends BaseDTO
{
    public function __construct(
        public bool $active,
        public string $name,
        public float $price,
        public int $stock
    ) {}
}
