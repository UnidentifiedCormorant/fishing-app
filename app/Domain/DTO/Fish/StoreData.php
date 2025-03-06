<?php

namespace App\Domain\DTO\Fish;

use Spatie\LaravelData\Data;

class StoreData extends Data
{
    public function __construct(
        public string $title,
        public float $size,
        public float $weight,
        public string $rating,
    ) {}
}
