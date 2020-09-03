@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                @forelse ($posts as $post)
                <ul>
                    <li> Title : {{ $post->title }}</li>
                    <li> Content : {{ $post->content }}</li>
                    <li> Date : {{ $post->published_at }}</li>
                </ul>
                @empty
                <p> Il n'y pas de post</p>
                @endforelse
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
