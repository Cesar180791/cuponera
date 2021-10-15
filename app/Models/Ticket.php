<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[ 
        'name',
        'price',
        'promotion',
        'beging',
        'ending',
        'limit',
        'quantity',
        'description',
        'statusTicket',
        'reason',
        'details',
        'image',
        'company_id'
    ];

      /*Accesor para recuperar la imagen, y poner una por defecto*/
    public function getImagenAttribute($image){
        if ($this->image == null)
            return 'noimg.png';
        if (file_exists('storage/cupon/'.$this->image)) 
               return $this->image;
        else
            return 'noimg.jpg';
    }

}
