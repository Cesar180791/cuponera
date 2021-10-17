<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSale extends Model
{
    use HasFactory;

    protected $fillable =[ 
        'price',
        'quantity',
        'ticket_id',
        'sale_id'
    ];

}
