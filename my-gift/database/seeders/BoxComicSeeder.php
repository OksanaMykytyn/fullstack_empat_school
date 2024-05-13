<?php

namespace Database\Seeders;

use App\Models\BoxComic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoxComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BoxComic::factory(40)->create();
    }
}
