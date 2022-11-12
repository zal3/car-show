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
            'email' => 'admin',
            'password' =>bcrypt(123456), // password
            // 'type' => true, // true for admin, false for employer
        ]);

        //id:2 is the employee user
        User::create([
            'name' => 'موظف',
            'email' => 'user',
            'password' =>bcrypt(123456), // password
            //employer default 
        ]);

        //id:3 is the employee user
        User::create([
            'name' => 'موظف1',
            'email' => 'user1',
            'password' =>bcrypt(123456), // password
            //employer default 
        ]);

        //id:4 is the employee user
        User::create([
            'name' => 'موظف2',
            'email' => 'user2',
            'password' =>bcrypt(123456), // password
            //employer default 
        ]);
    }
}