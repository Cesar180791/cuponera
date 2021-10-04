<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nit',
        'nrc',
        'phone',
        'address',
        'nameAdmin',
        'password',
        'email',
        'commission',
        'user_id'
    ];
}
