<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'user_id' => 1,
            'type' => 'SUV',
            'category' => 'Toyota',
            'model' => 'Land Cruiser',
            'sale_price' => '100000',
            'number' => '123456',
            'chassis_number' => '123456',
            'color' => 'white',
            'note' => 'good car',
            'import_place' => 'Japan',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '1',
    ]);
    }
}