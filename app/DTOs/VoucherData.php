<?php

namespace App\DTOs;

class VoucherData extends BaseDTO
{
    public function __construct(
        public string $name,
        public string $code,
        public int $quantity,
        public float $minimumValue,
        public string $startAt,
        public int $endAt,
    ) {}
}
