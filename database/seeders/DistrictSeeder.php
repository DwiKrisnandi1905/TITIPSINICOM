<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bantul = City::where('city', "Bantul")->first();

        District::create([
            'district' => 'Banguntapan',
            'city_id' => $bantul->id
        ]);

        District::create([
            'district' => 'Bambanglipuro',
            'city_id' => $bantul->id
        ]);

        District::create([
            'district' => 'Kretek',
            'city_id' => $bantul->id
        ]);
    }
}