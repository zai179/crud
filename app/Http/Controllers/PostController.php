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
        $posts = Post::with(['authors', 'categories'])->get();
        // dd($posts);
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
    $ids = json_encode($request->author);
     $post = new Post;
     $post->name = $request->name;
     $post->save();
    $post->authors()->attach($request->author);
    $post->categories()->attach($request->category);
    return redirect()->route('index');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->authors()->detach();
        $post->categories()->detach();
        return redirect()->back();
    }
}
