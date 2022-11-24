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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>bcrypt(123456), // password
            'is_admin' => true,
            'profile_photo_path' => 'https://i.pravatar.cc/150?img=1',
            // 'type' => true, // true for admin, false for employer
        ]);

        //id:2 is the employee user
        User::create([
            'name' => 'employee1',
            'email' => 'employee1@gmail.com',
            'is_admin' => true,
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => 'https://i.pravatar.cc/150?img=1',
            //employer default
        ]);

        //id:3 is the employee user
        User::create([
            'name' => 'employee2',
            'email' => 'employee2@gmail.com',
            'is_admin' => true,
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => 'https://i.imgur.com/9YQ9Z0C.jpg',
            //employer default
        ]);

        //id:4 is the employee user
        User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => 'https://i.pravatar.cc/150?img=1',
            //employer default
        ]);

        //id:5 is the employee user
        User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' =>bcrypt(123456), // password
            'profile_photo_path' => 'https://i.pravatar.cc/150?img=1',
            //employer default
        ]);

    }
}