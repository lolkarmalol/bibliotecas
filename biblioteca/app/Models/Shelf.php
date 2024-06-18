<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    use HasFactory;
    protected $fillable = ['theme_id', 'code'];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function bookCopies()
    {
        return $this->hasMany(Book_Copy::class);
    }
}
