<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [ 'id_user',
                            'username_user',
                            'password_user',
                            'name_user'];
    use HasFactory;
}
