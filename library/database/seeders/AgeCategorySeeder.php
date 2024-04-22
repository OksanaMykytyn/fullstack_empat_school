<?php

namespace Database\Seeders;

use App\Models\AgeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgeCategory::factory(5)->create();
    }
}
