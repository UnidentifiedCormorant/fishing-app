<?php

namespace App\Services\Abstracts;

use App\Domain\DTO\Fish\StoreData;

interface FishServiceInterface
{
    /**
     * @param StoreData $data
     * @return void
     */
    public function store(StoreData $data): void;
}
