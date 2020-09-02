@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>
                <p>{{ $post->content }}</p>
                <p>{{ $post->published }}</p>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection