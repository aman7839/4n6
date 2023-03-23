<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ISG extends Model
{
    use HasFactory;
    protected $table = 'i_s_g_s';
    protected $fillable = [
        
        'topic',
        'info',
       
    ];
}
