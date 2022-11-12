<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Rent::create([
            'user_id' => 1,
            'car_id' => 1,
            'location' => 'الرياض',
            'license' => '123456',
            'rent_date' => '2021-11-12',
            'return_date' => '2021-11-12',
            'phone-num' => '123456',
        ]);
        Rent::create([
            'user_id' => 1,
            'car_id' => 1,
            'location' => 'العراق',
            'license' => '78910',
            'rent_date' => '2022-11-12',
            'return_date' => '2023-11-12',
            'phone-num' => '789109',
        ]);
    }
}