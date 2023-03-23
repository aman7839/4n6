<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_guide extends Model
{
    use HasFactory;
    protected $table = 'users_guides';
    protected $fillable = [
        'name',
        'image',
        
    ];
}
