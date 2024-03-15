<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        user::create([
            'username_user' => 'jono_gan',
            'password_user' => bcrypt('secret'),
            'name_user' => 'Jono Gan'
        ]);
    }
}
