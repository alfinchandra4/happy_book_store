<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $guarded = [];

    public function detail() {
        return $this->hasOne(Detail::class, 'book_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
