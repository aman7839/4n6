<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachStudent extends Model
{
    use HasFactory;

    protected $table = 'coach_student';
    protected $fillable = [
        
        'coach_id',
        'student_id',
       
       
    ];

    public function coach() {
        return $this->belongsTo(Users::class,"coach_id","id");
    }
    public function student() {
        return $this->belongsTo(Users::class,"student_id","id");
    }

    
}
