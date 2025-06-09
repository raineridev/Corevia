<?php

namespace App\DTOs;

use App\DTOs\BaseDTO;

class VoucherData extends BaseDTO
{
        public function __construct(
        public string $name,
        public string $code,
        public int $quantity,
        public float $minimum_value,
        public string $startAt,
        public int $endAt,
    ) {}
}
