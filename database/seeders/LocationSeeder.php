<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use App\Models\Province;
use App\Models\ZipCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinceCsvFile = fopen(database_path("data/csv/provinces.csv"), "r");


        while (($provinceData = fgetcsv($provinceCsvFile, 2000, ",")) !== false) {
            $province = Province::create([
                "province" => ucfirst($provinceData[1]),
            ]);

            // City
            $cityCsvFile = fopen(database_path("data/csv/cities.csv"), "r");
            while (($cityData = fgetcsv($cityCsvFile, 2000, ",")) !== false) {
                if ($provinceData[0] == $cityData[1]) {
                    $city = City::create([
                        "city" => ucfirst($cityData[2]),
                        "province_id" => $province->id
                    ]);

                    // District
                    $districtCsvFile = fopen(database_path("data/csv/districts.csv"), "r");
                    while (($districtData = fgetcsv($districtCsvFile, 2000, ",")) !== false) {
                        if ($cityData[0] == $districtData[1]) {
                            $district = District::create([
                                "district" => ucfirst($districtData[2]),
                                "city_id" => $city->id
                            ]);

                            // Zip Code
                            $zipCodes = explode(",", $districtData[5]);
                            foreach ($zipCodes as $zipCode) {
                                ZipCode::create([
                                    'zip_code' => $zipCode,
                                    "district_id" => $district->id
                                ]);
                            }
                        }
                    }
                    fclose($districtCsvFile);
                }
            }
            fclose($cityCsvFile);
        }
        fclose($provinceCsvFile);
    }
}