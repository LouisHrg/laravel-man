<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
          'title' => 'required',
          'content' => 'min:3',
          'published_at' => 'date',
        ]);

        $post = new Post;
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->published_at = $validated['published_at'];
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Request $request, Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
