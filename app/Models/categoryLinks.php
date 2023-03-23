<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryLinks extends Model
{
    use HasFactory;
    protected $table = 'category_links';
    protected $fillable = [
        'catid',
        'title',
        'address',
        'description',
    
    ];
    public function category() {
        return $this->belongsTo(category::class,"id","catid");
    }
}
