<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribeUs extends Model
{
    use HasFactory;

    protected $table = 'subscribe_us';
    protected $fillable = [
        
        'email',
        
    ];
}
