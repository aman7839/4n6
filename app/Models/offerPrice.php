<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offerPrice extends Model
{
    use HasFactory;

    protected $table = 'offer_prices';
    protected $fillable = [
        
        'price',
        'offer_price',
        'from_date',
        'to_date',
        'status',
        'description', 
       
    ];
}
