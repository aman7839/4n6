<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extemp extends Model
{
    use HasFactory;
    protected $table = 'extemps';
    protected $fillable = [
        
        'type',
        'question',
        'month',

        'year',

        'topic_id',
        'public',


       
    ];

    public function topic() {
        return $this->belongsTo(ExtempTopic::class,"topic_id","id");
    }
}
