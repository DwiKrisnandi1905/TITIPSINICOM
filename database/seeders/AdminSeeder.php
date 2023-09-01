<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\ZipCode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zipCode = ZipCode::where('zip_code', '55163')->first();

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'address' => 'Jalan Raya Janti, Gang Arjuna Nomor 59, Karangjambe, Banguntapan, Bantul Regency, Special Region of Yogyakarta 55198',
            'gender' => 'male',
            'zip_code_id' => $zipCode->id,
            'phone_number' => '0895123456789',
        ]);
    }
}
