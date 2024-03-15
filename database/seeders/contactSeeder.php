<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        contact::create([
            'first_name_contact' => 'Ahmad',
            'last_name_contact' => 'Balya',
            'email_contact' => 'ahmad@gmail.com',
            'phone_contact' => '081358024205'
        ]);
    }
}
