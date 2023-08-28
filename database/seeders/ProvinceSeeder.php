<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create([
            'province' => "Yogyakarta"
        ]);

        Province::create([
            'province' => "Jawa Tengah"
        ]);

        Province::create([
            'province' => "Jawa Barat"
        ]);

        Province::create([
            'province' => "Jawa Timur"
        ]);
    }
}
