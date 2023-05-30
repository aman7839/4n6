<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditPage extends Model
{
    use HasFactory;

    protected $table = 'edit_page_content';
    protected $fillable = [
        
        'page_title',
        'page_description',
       
    ];
}
