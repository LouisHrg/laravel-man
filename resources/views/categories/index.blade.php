@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                @forelse ($categories as $category)
                <ul>
                    <a href="{{route(
                        'categories.show',
                        ['category' => $category])
                    }}">
                        Name : {{ $category->name }}
                    </a>
                    <li> Slug : {{ $category->slug }}</li>
                </ul>
                @empty
                <p> Il n'y pas de category </p>
                @endforelse
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
