@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst($post->title) }}</div>
                <div class="card-body">
                    <p>Titre : {{ $post->title }}</p>
                    <p>Contenu : {{ $post->content }}</p>
                    <p>Date de publication : {{ \Carbon\Carbon::parse($post->published_at)->format('d/m/Y') }}</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    {{ View::make('posts.delete', ['post' => $post]) }}
                    <a href="{{route('posts.edit', ['post' => $post])}}"
                        class="btn btn-info ">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
