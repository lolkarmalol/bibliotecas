<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Copy extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'library_id', 'shelf_id', 'copy_number'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function shelf()
    {
        return $this->belongsTo(Shelf::class);
    }
}
