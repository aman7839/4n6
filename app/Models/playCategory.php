<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playCategory extends Model
{
    use HasFactory;
    protected $table = 'play_categories';
    protected $fillable = [
        
        'name',
       
       
    ];
    public function category() {
        return $this->belongsTo(Data::class,"id","category_name");
    }

}
