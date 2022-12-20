<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //id:1 is the admin user
        User::create([
            
            'name' => 'احمد',
            'email' => 'admin@gmail.com',
            'telegram_username' => 'ahmed',
            'password' =>bcrypt(123456), // password
            'phone_number' => '01000000000',
            'is_admin' => true,
            'profile_photo_path' => '/img/team/admin.png',
            // 'type' => true, // true for admin, false for employer
        ]);

        //id:2 is the employee user
        User::create([
            'name' => 'علي',
            'email' => 'employee1@gmail.com',
            'telegram_username' => 'ali',
            'is_admin' => true,
            'password' =>bcrypt(123456), // password
            'phone_number' => '02000000000',
            'profile_photo_path' => '/img/team/ali.jpg',
            //employer default
        ]);

        //id:3 is the employee user
        User::create([
            'name' => 'يوسف',
            'email' => 'employee2@gmail.com',
            'telegram_username' => 'yousef',
            'is_admin' => true,
            'phone_number' => '03000000000',
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => '/img/team/yousef.png',
            //employer default
        ]);

        //id:4 is the employee user
        User::create([
            'name' => 'مريم',
            'email' => 'employee3@gmail.com',
            'phone_number' => '04000000000',
            'telegram_username' => 'mariam',
            'is_admin' => true,
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => '/img/team/mariam.png',
            //employer default
        ]);

        //id:5 is the employee user
        User::create([
            'name' => 'زينب',
            'email' => 'user1@gmail.com',
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => '/img/team/zainab.png',
            //employer default
        ]);

        //id:6 is the employee user
        User::create([
            'name' => 'محمد',
            'email' => 'user2@gmail.com',
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => '/img/team/mohammed.jpg',
            //employer default
        ]);
        User::create([
            'name' => 'اسماعيل',
            'email' => 'user3@gmail.com',
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => '/img/team/easa.png',
            //employer default
        ]);

    }
}