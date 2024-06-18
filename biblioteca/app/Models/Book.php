<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'publication_date', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function libraries()
    {
        return $this->belongsToMany(Library::class, 'book_copies')
                    ->withPivot('shelf_id', 'copy_number');
    }

    public function copies()
    {
        return $this->hasMany(Book_Copy::class);
    }
}
