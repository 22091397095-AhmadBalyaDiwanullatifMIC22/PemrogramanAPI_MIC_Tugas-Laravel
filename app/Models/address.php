<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $fillable = [ 'id_address',
                            'id_contact',
                            'street_address',
                            'city_address',
                            'province_address',
                            'country_address',
                            'postal_code_address'];
    use HasFactory;
}
