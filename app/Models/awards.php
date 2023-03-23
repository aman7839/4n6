<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class awards extends Model
{
    use HasFactory;
    protected $table = 'awards';
    protected $fillable = [
        
        'awards_name',];

        public function awards() {
            return $this->belongsTo(Data::class,"id","award_name");
        }
}
