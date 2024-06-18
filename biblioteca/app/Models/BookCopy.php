<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BookCopy
 *
 * @property $id
 * @property $book_id
 * @property $library_id
 * @property $shelf_id
 * @property $copy_number
 * @property $created_at
 * @property $updated_at
 *
 * @property Book $book
 * @property Library $library
 * @property Shelf $shelf
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BookCopy extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['book_id', 'library_id', 'shelf_id', 'copy_number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class, 'book_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function library()
    {
        return $this->belongsTo(\App\Models\Library::class, 'library_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shelf()
    {
        return $this->belongsTo(\App\Models\Shelf::class, 'shelf_id', 'id');
    }
    
}
