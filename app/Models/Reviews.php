<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = [
        
        'user_id',
        'type',
        'screenshot',
        'comment',
        'approved',
       
    ];

    public function review() {
        return $this->belongsTo(User::class,"user_id","id");
    }

    
}
