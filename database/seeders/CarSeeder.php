<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'type' => 'Sonata',
            'category' => 'Hyundai',
            'model' => '2011',
            'sale_price' => 10000,
            'number' => 'ABC123',
            'chassis_number'=> 'ABC123',
            'color' => 'yellow',
            'note' => '',
            'import_place' => 'الخليج',
            'import_date' => '2010-01-01',
            'import_price' => 8000,
            'state' => false,
        ]);

        Car::create([
            'user_id' => 1,
            'type' => 'dodge',
            'category' => 'Charger',
            'model' => '2011',
            'sale_price' => 10000,
            'number' => 'ABC123',
            'chassis_number'=> 'ABC123',
            'color' => 'red',
            'note' => '',
            'import_place' => 'الخليج',
            'import_date' => '2010-01-01',
            'import_price' => 8000,
            'state' => false,
        ]);
        
        Car::create([
            'user_id' => 1,
            'type' => 'jeep',
            'category' => 'Cherokee',
            'model' => '2011',
            'sale_price' => 10000,
            'number' => 'ABC123',
            'chassis_number'=> 'ABC123',
            'color' => 'blue',
            'note' => '',
            'import_place' => 'الخليج',
            'import_date' => '2010-01-01',
            'import_price' => 8000,
            'state' => false,
        ]);
    }
}