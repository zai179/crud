<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;


     public function posts() {
        return $this->belongsToMany(Author::class,'detail_posts', 'post_id', 'author_id');
    }
}
