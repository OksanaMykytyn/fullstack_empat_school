<?php

namespace Database\Seeders;

use App\Models\Wrapper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WrapperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wrapper::factory(10)->create();
    }
}
