<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            ['name' => 'Laptops'],
            ['name' => 'Desktops'],
            ['name' => 'Monitors'],
            ['name' => 'Keyboards'],
            ['name' => 'Mice'],
            ['name' => 'Printers'],
            ['name' => 'Video Beams'],
            ['name' => 'Blu-ray Players'],
            ['name' => 'Cleaning Supplies'],
            ['name' => 'Networking Equipment'],
            ['name' => 'External Hard Drives'],
            ['name' => 'USB Flash Drives'],
            ['name' => 'Memory Cards'],
            ['name' => 'Webcams'],
            ['name' => 'Speakers'],
            ['name' => 'Headphones'],
            ['name' => 'Microphones'],
            ['name' => 'Projectors'],
            ['name' => 'Smartphones'],
            ['name' => 'Tablets'],
        ]);
    }   // Here End Function Run
}   // Here End Class
