<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author_id',
        'category_id',
    ];

    public function authors() {
        return $this->belongsTo(Author::class,'author_id', 'id');
    }
    public function categories() {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }
}
