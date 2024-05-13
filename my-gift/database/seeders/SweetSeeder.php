<?php

namespace Database\Seeders;

use App\Models\Sweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sweet::factory(10)->create();
    }
}
