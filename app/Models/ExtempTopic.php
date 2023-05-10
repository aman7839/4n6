<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtempTopic extends Model
{
    use HasFactory;
    protected $table = 'extemp_topics';
    protected $fillable = [
        
        'name',
    
       
    ];
    public function topic() {
        return $this->belongsTo(Extemp::class,"id","topic_id");
    }
}
