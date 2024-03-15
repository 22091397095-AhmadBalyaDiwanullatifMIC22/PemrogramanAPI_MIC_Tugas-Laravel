<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = ['first_name_contact',
                            'last_name_contact',
                            'email_contact',
                            'phone_contact'];
    use HasFactory;
}
