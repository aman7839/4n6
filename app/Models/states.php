<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class states extends Model
{
    use HasFactory;
    protected $table = 'states';
    protected $fillable = [
        
        'name',
        'description',
        'hidden',
        'file',
        
    ];
    public function states() {
        return $this->belongsTo(User::class,"id","school_state");
    }
}
