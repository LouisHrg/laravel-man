@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                        <th>Name </th>
                        <th>Slug </th>
                        <th>Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>
                        <a href="{{route(
                            'categories.show',
                            ['category' => $category])
                        }}">{{ $category->name }}
                        </td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <a href="{{route('categories.edit', ['category' => $category])}}"
                                class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            {{ View::make('categories.delete', ['category' => $category]) }}
                        </td>
                    </tr>
                @empty
                    <p> Il n'y pas de category pour le moment </p>
                    <a href="{{route('categories.create')}}"> Créer une nouvelle catégorie </a>
                @endforelse
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
