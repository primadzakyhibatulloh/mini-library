<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'year', 'category_id', 'cover', 'stock'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Aksesor biar gampang panggil gambar di frontend
    public function getCoverUrlAttribute()
    {
        return $this->cover ? Storage::url($this->cover) : 'https://placehold.co/400x600?text=No+Cover';
    }
}