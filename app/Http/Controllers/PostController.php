<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Auth;
class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(3);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        $options = Category::toSelectArray();
        return view('posts.form', ['options' => $options]);
    }

    public function store(Request $request)
    {
        $validated = $this->makeValidation($request);

        $post = new Post;
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->published_at = $validated['published_at'];
        $post->category_id = $validated['category_id'];
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Request $request, Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Request $request, Post $post)
    {
        $options = Category::toSelectArray();
        return view(
            'posts.form',
            ['post' => $post, 'options' => $options]
        );
    }

    public function update(Request $request, Post $post)
    {
        $validated = $this->makeValidation($request);

        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->published_at = $validated['published_at'];
        $post->category_id = $validated['category_id'];
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function makeValidation(Request $request): array
    {
        return $request->validate([
          'title' => 'required',
          'category_id' => 'exists:App\Category,id',
          'content' => 'min:3',
          'published_at' => 'date',
        ]);
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
