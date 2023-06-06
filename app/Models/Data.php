<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $fillable = [
        'title',
        'author',
        'book',
        'publisher',
        'summary',
        'public',
        'type',
        'characters',
        'rating',
        'isbn',
    ];
    protected $appends = ['award_name'];

    public function awards() {
        return $this->belongsTo(awards::class,"award_id","id");
    }

    public function theme() {
        return $this->belongsTo(Theme::class,"theme_id","id");
    }
    public function category() {
        return $this->belongsTo(playCategory::class,"category_id","id");
    }

    public function files()
    {
        return $this->belongsTo(VaultFiles::class, 'author','author_name');
    }

    public function getAwardNameAttribute(){
        $data = $this->belongsTo(Data::class,"id")->first();
        $ids = explode(",",strval($this->award_id));
        $award = awards::whereIn('id', $ids)->pluck('awards_name')->implode(', ');
        return $award;
    }
}
