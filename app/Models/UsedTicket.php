<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'fechaCanjeado',
        'ticket_wallets_id'
    ]; 
}
