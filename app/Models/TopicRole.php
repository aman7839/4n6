<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicRole extends Model
{
    use HasFactory;
    protected $table = 'topic_roles';
    protected $fillable = [
        'name',
        'info',
       
    ];
}
