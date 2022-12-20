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
            'type' => ' فورد  ',
            'category' => '  فييستا  ',
            'model' => '2018',
            'sale_price' => '10000',
            'number' => '124Aa7',
            'chassis_number' => '47093bb1',
            'color' => '4 ',
            'note' => 'good car',
            'import_place' => 'الولايات المتحده  ',
            'import_date' => '2018-2-4',
            'import_price' => '9000',
            'state' => '0',
            'image_path' => 'img\cars\car13.jpg',
        ]);
        //2
        Car::create([
            'type' => ' النترا  ',
            'category'=>'    هوندا  ',
            'model' => '2019',
            'sale_price' => '9000',
            'number' => '784Aa3',
            'chassis_number' => '44163bb2',
            'color' => '2 ',
            'note' => 'good car',
            'import_place' => ' كوريا  ',
            'import_date' => '2019-1-6',
            'import_price' => '8777',
            'state' => '0',
            'image_path' => 'img\cars\car14.jpg',
        ]);
        //3
        Car::create([
            'type' => ' لاندكروزر ',
            'category' => 'تويوتا   ',
            'model' => '2022',
            'sale_price' => '9500',
            'number' => '5624Aa6',
            'chassis_number' => '573bb5',
            'color' => '3',
            'note' => 'good car',
            'import_place' => 'اليابان',
            'import_date' => '2022-10-8',
            'import_price' => '8905',
            'state' => '1',
            'image_path' => 'img\cars\car11.jpg',
        ]);
        //4
        Car::create([
            'type' => 'سيفيك ',
            'category' =>' هوندا  ',
            'model' => '2019',
            'sale_price' => '7800',
            'number' => '7531Aa9',
            'chassis_number' => '642bb8',
            'color' => '1',
            'note' => 'good car',
            'import_place' => 'يابان',
            'import_date' => '2018-5-2',
            'import_price' => '7250',
            'state' => '1',
            'image_path' => 'img\cars\car7.jpg',
        ]);
        //5
        Car::create([
            'type' => 'ريو ',
            'category' => ' كيا ',
            'model' => '2018',
            'sale_price' => '8705',
            'number' => '1357Aa9',
            'chassis_number' => '246bb8',
            'color' => '6',
            'note' => 'good car',
            'import_place' => 'كوريا',
            'import_date' => '2018-10-12',
            'import_price' => '8000',
            'state' => '0',
            'image_path' => 'img\cars\car8.jpg',
        ]);
        //6
        Car::create([
            'type' => ' شيفروليه ',
            'category' => '  ماليبو ',
            'model' => '2020',
            'sale_price' => '8000',
            'number' => '7593Aa1',
            'chassis_number' => '286bb0',
            'color' => '2',
            'note' => 'good car',
            'import_place' => 'امريكا',
            'import_date' => '2020-3-12',
            'import_price' => '7100',
            'state' => '0',
            'image_path' => 'img\cars\car9.jpg',
        ]);
        //7
        Car::create([
            'type' => '  جي تي ',
            'category' => 'فيراري',
            'model' => '2021',
            'sale_price' => '10000',
            'number' => '3256Aa2',
            'chassis_number' => '125bb7',
            'color' => '4',
            'note' => 'good car',
            'import_place' => 'ايطاليا',
            'import_date' => '2021-8-2',
            'import_price' => '9800',
            'state' => '0',
            'image_path' => 'img\cars\car10.jpg',
        ]);

        //8
        Car::create([
            'type' => ' سانتافي ',
            'category' => 'تويوتا   ',
            'model' => '2022',
            'sale_price' => '7800',
            'number' => '8634Aa5',
            'chassis_number' => '4023bb8',
            'color' => '6 ',
            'note' => 'good car',
            'import_place' => 'الولايات المتحده ',
            'import_date' => '2022-6-3',
            'import_price' => '7100',
            'state' => '0',
            'image_path' => 'img\cars\car12.jpg',
        ]);
        //9
        Car::create([
            'type' => '  صني  ',
            'category'=>'    نيسان  ',
            'model' => '2020',
            'sale_price' => '8000',
            'number' => '324Aa5',
            'chassis_number' => '2518bb4',
            'color' => '1 ',
            'note' => 'good car',
            'import_place' => ' يابان  ',
            'import_date' => '2021-8-4',
            'import_price' => '7200',
            'state' => '1',
            'image_path' => 'img\cars\car15.jpg',
        ]);
        //10
        Car::create([
            'type' => 'فورد',
            'category' => 'هيونداي',
            'model' => '2022 ',
            'sale_price' => '10000',
            'number' => '12456A',
            'chassis_number' => '1234hb6',
            'color' => '2',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-12',
            'import_price' => '9400',
            'state' => '0',
            'image_path' => 'img\cars\car1.jpg',

        ]);
        //11
        Car::create([
            'type' => 'بوني',
            'category' => 'هيونداي',
            'model' => '2022',
            'sale_price' => '10000',
            'number' => '13ff456',
            'chassis_number' => '13om456',
            'color' => '1',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2022-02-08',
            'import_price' => '9500',
            'state' => '1',
            'image_path' => 'img\cars\car2.jpg',
        ]);
        //12
        Car::create([
            'type' => 'سيفيك',
            'category' => 'هوندا ',
            'model' => '2021',
            'sale_price' => '8750',
            'number' => '123dd456',
            'chassis_number' => '123dd456',
            'color' => '3',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-18',
            'import_price' => '7000',
            'state' => '0',
            'image_path' => 'img\cars\car3.jpg',
        ]);
        //13
        Car::create([
            'type' => 'كامري',
            'category' => 'تويوتا ',
            'model' => '2020',
            'sale_price' => '9700',
            'number' => '123vv456',
            'chassis_number' => '198v456',
            'color' => '6',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2021-11-18',
            'import_price' => '8900',
            'state' => '0',
            'image_path' => 'img\cars\car4.jpg',
        ]);
        //14
        Car::create([
            'type' => 'ياريس',
            'category' => 'تويوتا ',
            'model' => '2020',
            'sale_price' => '10000',
            'number' => '123ss456',
            'chassis_number' => '198s456',
            'color' => '4',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2022-5-22',
            'import_price' => '9500',
            'state' => '1',
            'image_path' => 'img\cars\car5.jpg',
        ]);
        //15
        Car::create([
            'type' => 'كورولا',
            'category' => 'تويوتا ',
            'model' => '2018',
            'sale_price' => '9800',
            'number' => '19aa456',
            'chassis_number' => '123aa456',
            'color' => '4',
            'note' => 'good car',
            'import_place' => 'الخليج',
            'import_date' => '2022-04-12',
            'import_price' => '9400',
            'state' => '0',
            'image_path' => 'img\cars\car6.jpg',
        ]);


    }
}