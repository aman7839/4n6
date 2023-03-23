<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        
        'name',
        'description',
    
    ];

    public function categoryLinks()
    {
        return $this->hasMany(categoryLinks::class);
    }
}
