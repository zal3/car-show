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
            'user_id' => 4,
            'car_id' => 14,
            'location' => 'مقابل شنشل مول',
            'rent_date' => '2022-12-10',
            'return_date' => '2022-12-17',
            'phone_num' => '123456789',
            'state' => 0,
            'image_path' => 'img\rent\license.jpg',
        ]);

        Rent::create([
            'user_id' => 5,
            'car_id' => 11,
            'location' => 'شارع الوفود',
            'rent_date' => '2022-12-15',
            'return_date' => '2022-12-22',
            'phone_num' => '123456789',
            'state' => 0,
            'image_path' => 'img\rent\license.jpg',

        ]);
    }
}