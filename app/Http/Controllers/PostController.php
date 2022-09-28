<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function addPost()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('posts.add', compact('authors', 'categories'));
    }

    public function savePost(Request $request)
    {
        $author = '';
        $category = '';
        foreach($request->author as $auth) {
             $author = $auth ;
         }
         foreach($request->category as $cat) {
            $category = $cat;
         }
     $post = new Post;
     $post->name = $request->name;
     $post->author_id = $author;
     $post->category_id = $category;
    $post->save();
    return redirect()->route('index');
    }
}
