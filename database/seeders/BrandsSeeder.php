<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("brands")->insert([
            ['name' => 'Apple'],
            ['name' => 'Samsung'],
            ['name' => 'HP'],
            ['name' => 'Dell'],
            ['name' => 'Lenovo'],
            ['name' => 'Asus'],
            ['name' => 'Acer'],
            ['name' => 'Microsoft'],
            ['name' => 'Sony'],
            ['name' => 'LG'],
            ['name' => 'Toshiba'],
            ['name' => 'Panasonic'],
            ['name' => 'Canon'],
            ['name' => 'Nikon'],
            ['name' => 'Brother'],
            ['name' => 'Epson'],
            ['name' => 'Logitech'],
            ['name' => 'Razer'],
            ['name' => 'Corsair'],
            ['name' => 'Kingston'],
            ['name' => 'SanDisk'],
            ['name' => 'Western Digital'],
            ['name' => 'Seagate'],
            ['name' => 'TP-Link'],
            ['name' => 'Netgear'],
            ['name' => 'Huawei'],
            ['name' => 'Xiaomi'],
            ['name' => 'OnePlus'],
            ['name' => 'Google'],
            ['name' => 'Amazon'],
            ['name' => 'Philips'],
            ['name' => 'JBL'],
            ['name' => 'Bose'],
            ['name' => 'Sennheiser'],
            ['name' => 'Beats'],
            ['name' => 'Anker'],
            ['name' => 'Belkin'],
            ['name' => 'Garmin'],
            ['name' => 'Fitbit'],
            ['name' => 'GoPro'],
        ]);
    }
}