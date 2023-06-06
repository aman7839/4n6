<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaultFiles extends Model
{
    use HasFactory;
    protected $table = 'vault_files';
    protected $fillable = [
        
        'name',
        'description',
        'file',
        'vault_id',      
    ];
   
   
}
