<?php

namespace Database\Seeders;

use App\Models\BoxSweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoxSweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BoxSweet::factory(40)->create();
    }
}
