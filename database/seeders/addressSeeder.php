<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\address;

class addressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        address::create([
            'id_contact' => 1,
            'street_address' => 'Delta Sari Indah',
            'city_address' => 'Sidoarjo',
            'province_address' => 'Jawa Timur',
            'country_address' => 'Indonesia',
            'postal_code_address' => '61256'
        ]);
    }
}
