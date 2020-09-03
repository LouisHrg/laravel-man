@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>
                <table class="table">
                <thead>
                    <tr>
                        <th>Title </th>
                        <th>Content </th>
                        <th>Publication Date</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td><a href="{{route('posts.show', ['post' => $post])}}">{{ $post->title }}</a></td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->published_at }}</td>
                    @if(isset($post->category))
                    <td>{{ $post->category->name }}</td>
                    @endif
                    <td>{{ ucfirst($post->user->name) }}</td>
                    <td>
                        <a href="{{route('posts.edit', ['post' => $post])}}"
                            class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        {{ View::make('posts.delete', ['post' => $post]) }}
                    </td>
                </tr>
                @empty
                </tbody>
                </table>
                <div class="card-body">
                <p> Il n'y pas de poste pour le moment</p>
                <a href="{{route('posts.create')}}">Créer un nouveau post</a>
                </div>
                @endforelse
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
