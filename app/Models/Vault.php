<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vault extends Model
{
    use HasFactory;
    protected $table = 'vault';
    protected $fillable = [
        
        'name',
        'coach_access',
        'student_access',
        'description',
        'parent_id',      
    ];

    public function parent()
    {
        return $this->belongsTo(Vault::class, 'parent_id');
    }
    
    public function children()
    {
        return $this->hasMany(Vault::class, 'parent_id');
    }
    
    public function items()
    {
        return $this->hasMany(VaultFiles::class);
    }
    
    public function nestedCategories()
    {
        return $this->children()->with('items', 'nestedCategories.items');

}
}