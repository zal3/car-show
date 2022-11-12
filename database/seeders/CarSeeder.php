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
    Car::create([
        'user_id' => 1,
        'type' => 'una',
        'category' => 'yougn',
        'model' => 'famile',
        'sale_price' => '200000',
        'number' => '789101',
        'chassis_number' => '789112',
        'color' => 'blue',
        'note' => 'very good',
        'import_place' => 'lon',
        'import_date' => '2022-6-12',
        'import_price' => '200000',
        'state' => '1',
]);
Car::create([
    'user_id' => 1,
    'type' => 'wwe',
    'category' => 'garger',
    'model' => 'gar',
    'sale_price' => '300000',
    'number' => '246810',
    'chassis_number' => '135790',
    'color' => 'red',
    'note' => 'good ',
    'import_place' => 'unt',
    'import_date' => '2022-9-12',
    'import_price' => '300000',
    'state' => '1',
]);
Car::create([
    'user_id' => 1,
    'type' => 'min',
    'category' => 'sonata',
    'model' => 'Cruiser',
    'sale_price' => '400000',
    'number' => '123456',
    'chassis_number' => '123456',
    'color' => 'black',
    'note' => 'wery good car',
    'import_place' => 'ind',
    'import_date' => '2023-1-12',
    'import_price' => '400000',
    'state' => '1',
]);
Car::create([
    'user_id' => 1,
    'type' => 'ytf',
    'category' => 'serav',
    'model' => 'Land ',
    'sale_price' => '500000',
    'number' => '125689',
    'chassis_number' => '985621',
    'color' => 'yellow',
    'note' => 'bad car',
    'import_place' => 'iran',
    'import_date' => '2003-11-12',
    'import_price' => '500000',
    'state' => '1',
]);
Car::create([
    'user_id' => 1,
    'type' => 'abe',
    'category' => 'saeba',
    'model' => 'bag',
    'sale_price' => '600000',
    'number' => '123456',
    'chassis_number' => '123456',
    'color' => 'bink',
    'note' => ' g car',
    'import_place' => 'ordan',
    'import_date' => '2021-1-1',
    'import_price' => '600000',
    'state' => '1',
]);
    }
}