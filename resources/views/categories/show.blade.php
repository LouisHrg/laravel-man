@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst($category->name) }}</div>
                <div class="card-body">
                    <p>Nom : {{ $category->name }}</p>
                    <p>Slug : {{ $category->slug }}</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    {{ View::make('categories.delete', ['category' => $category]) }}
                    <a href="{{route('categories.edit', ['category' => $category])}}"
                        class="btn btn-info ">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
