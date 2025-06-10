<?php

namespace App\DTOs;

use App\DTOs\BaseDTO;

class VariantData extends BaseDTO
{
        public function __construct(
        public string $name,
        public int $productId,
        public float $price,
    ) {}
}
