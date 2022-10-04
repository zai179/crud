<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function authors() {
        return $this->belongsToMany(Author::class,'detail_posts', 'post_id', 'author_id');
    }
    public function categories() {
        return $this->belongsToMany(Category::class,'category_post', 'post_id', 'category_id');
    }
}
