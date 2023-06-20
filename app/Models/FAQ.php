<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    protected $table = '_f_a_q';
    protected $fillable = [
        
        'type',
        'question',
        'answer',

       
    ];
}
