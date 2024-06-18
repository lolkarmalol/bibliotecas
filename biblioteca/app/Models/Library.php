<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shelves()
    {
        return $this->hasMany(Shelf::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_copies')
                    ->withPivot('shelf_id', 'copy_number');
    }
}
