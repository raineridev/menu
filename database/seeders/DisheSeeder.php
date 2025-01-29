<?php

namespace Database\Seeders;

use App\Models\Dishe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DisheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dishe::factory()
        ->count(10)
        ->create();
    }
}
