<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Contact::create([
            'name' => 'زينب',
            'email' => 'zainab@gmail.com',
            'title' => 'title',
            'subject' => 'subject',
        ]);
        Contact::create([
            'name' => 'انوار',
            'email' => 'anwar@gmail.com',
            'title' => 'aa',
            'subject' => 'sn',
        ]);
       
         
        
    }
}