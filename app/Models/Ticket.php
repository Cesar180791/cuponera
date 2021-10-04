<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[
        "name",
        "price",
        "begin",
        "ending",
        "limit",
        "quantity",
        "description",
        "company_id",
        "user_id",
        'heading_id'
    ];

}
