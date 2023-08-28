<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yogyakarta = Province::where('province', "Yogyakarta")->first();

        City::create([
            'city' => 'Gunung Kidul',
            'province_id' => $yogyakarta->id
        ]);

        City::create([
            'city' => 'Bantul',
            'province_id' => $yogyakarta->id
        ]);

        City::create([
            'city' => 'Sleman',
            'province_id' => $yogyakarta->id
        ]);
    }
}
