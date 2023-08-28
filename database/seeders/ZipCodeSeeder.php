<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\ZipCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZipCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banguntapan = District::where('district', "Banguntapan")->first();

        ZipCode::create([
            'zip_code' => '55163',
            'district_id' => $banguntapan->id
        ]);

        ZipCode::create([
            'zip_code' => '55165',
            'district_id' => $banguntapan->id
        ]);

        ZipCode::create([
            'zip_code' => '55191',
            'district_id' => $banguntapan->id
        ]);
    }
}