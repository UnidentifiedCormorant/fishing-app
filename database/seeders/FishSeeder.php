<?php

namespace Database\Seeders;

use App\Models\Fish\Fish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fish::factory()->count(20)->create();
    }
}
