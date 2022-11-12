<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Car::create([
            'user_id' => 1,
            'name'=>'Desdamona',
            'sale_price'=> '000 000',
            'number' => 'a 9876',
            'chassis_number'=> '876',
            'color'=> 'red',
            


    }
}