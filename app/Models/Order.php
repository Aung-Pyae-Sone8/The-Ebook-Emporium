<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'photo_url',
        'book_id',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
