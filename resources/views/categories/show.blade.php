@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('categories.edit', ['category' => $category])}}" class="btn btn-info">Edit</a>
            {{ View::make('categories.delete', ['category' => $category]) }}
            <div class="card">
                <p>{{ $category->name }}</p>
                <p>{{ $category->slug }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
