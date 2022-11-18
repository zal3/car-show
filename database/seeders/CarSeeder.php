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
        //1
        Car::create([
            'type' => 'فورد',
            'category' => 'هيونداي',
            'model' => '2022 ',
            'sale_price' => '100000',
            'number' => '123456',
            'chassis_number' => '123456',
            'color' => '2',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '0',
            'image_path' => 'img\cars\car1.jpg',

        ]);
        //2
        Car::create([
            'type' => 'بوني',
            'category' => 'هيونداي',
            'model' => '2022',
            'sale_price' => '100000',
            'number' => '123ff456',
            'chassis_number' => '123ff456',
            'color' => '1',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '0',
            'image_path' => 'img\cars\car2.jpg',
        ]);
        //3
        Car::create([
            'type' => 'سيفيك',
            'category' => 'هوندا ',
            'model' => '2021',
            'sale_price' => '100000',
            'number' => '123dd456',
            'chassis_number' => '123dd456',
            'color' => '3',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '0',
            'image_path' => 'img\cars\car3.jpg',
        ]);
        //4
        Car::create([
            'type' => 'كامري',
            'category' => 'تويوتا ',
            'model' => '2020',
            'sale_price' => '100000',
            'number' => '123vv456',
            'chassis_number' => '123vv456',
            'color' => '6',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '1',
            'image_path' => 'img\cars\car4.jpg',
        ]);
        //5
        Car::create([
            'type' => 'ياريس',
            'category' => 'تويوتا ',
            'model' => '2020',
            'sale_price' => '100000',
            'number' => '123ss456',
            'chassis_number' => '123ss456',
            'color' => '4',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '1',
            'image_path' => 'img\cars\car5.jpg',
        ]);
        //6
        Car::create([
            'type' => 'كورولا',
            'category' => 'تويوتا ',
            'model' => '2020',
            'sale_price' => '100000',
            'number' => '123aa456',
            'chassis_number' => '123aa456',
            'color' => '4',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '100000',
            'state' => '0',
            'image_path' => 'img\cars\car6.jpg',
        ]);


    }
}