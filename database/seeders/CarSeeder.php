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
            'type' => 'بورش',
            'category' => 'توربو',
            'model' => '2022 ',
            'sale_price' => '100000',
            'number' => '123456',
            'chassis_number' => '123456',
            'color' => '1',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '1',
            'image_path' => 'img\cars\popular1.png',

        ]);
        Car::create([
            'type' => 'بورش',
            'category' => 'توربو',
            'model' => '2022',
            'sale_price' => '100000',
            'number' => '123ff456',
            'chassis_number' => '123dd456',
            'color' => '2',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '1',
            'image_path' => 'img\cars\popular1.png',
        ]);


    }
}