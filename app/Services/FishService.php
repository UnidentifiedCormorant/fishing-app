<?php

namespace App\Services;

use App\Domain\DTO\Fish\StoreData;
use App\Models\Fish\Fish;
use App\Services\Abstracts\FishServiceInterface;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;

class FishService implements FishServiceInterface
{
    /**
     * @return EloquentCollection<int, Fish>
     */
    public function index(): EloquentCollection
    {
        return Fish::all();
    }

    /**
     * @inheritdoc
     */
    public function store(StoreData $data): void
    {
        Fish::create($data->toArray());
    }

    /**
     * @param Fish $fish
     * @param StoreData $data
     * @return void
     */
    public function update(Fish $fish, StoreData $data): void
    {
        $fish->update($data->toArray());
    }

    /**
     * @param Fish $fish
     * @return void
     */
    public function destroy(Fish $fish): void
    {
        $fish->delete();
    }
}
