<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketWallet extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'ticket_id',
        'price',
        'quantity',
        'codeCupon',
        'statusTicketWallet',
        
     
    ];
}
