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
            'car_id' => 4,
            'location' => 'Budapest',
            'rent_date' => '2021-11-12',
            'return_date' => '2021-11-13',
            'phone_num' => '123456789',
            'state' => 0,
        ]);

        Rent::create([
            'user_id' => 2,
            'car_id' => 5,
            'location' => 'Budapest',
            'rent_date' => '2021-11-12',
            'return_date' => '2021-11-13',
            'phone_num' => '123456789',
            'state' => 0,
        ]);
    }
}