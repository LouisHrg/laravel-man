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
        return view('posts.form');
    }

    public function store(Request $request)
    {
        $validated = $this->makeValidation($request);

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

    public function edit(Request $request, Post $post)
    {
        return view('posts.form', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $this->makeValidation($request);

        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->published_at = $validated['published_at'];
        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function makeValidation(Request $request): array
    {
        return $request->validate([
          'title' => 'required',
          'content' => 'min:3',
          'published_at' => 'date',
        ]);
    }

    public function delete(Request $request, Post $post)
    {
        dd($post);
    }
}
