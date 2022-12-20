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
            'name' => 'احمد',
            'email' => 'ahmad@gmail.com',
            'title' => 'سوال',
            'subject' => 'هل تتوفر سيارة موديل 2019',
        ]);
        Contact::create([
            'name' => 'علي',
            'email' => 'ali@gmail.com',
            'title' => 'اقتراح',
            'subject' => 'قومو بتوفير سيارات اكثر انواعا',
        ]);
          
    }
}