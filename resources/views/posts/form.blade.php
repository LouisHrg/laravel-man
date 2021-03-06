@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                <ul>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(Route::currentRouteName() === 'posts.edit')
                    {!! Form::model(
                        $post,
                        ['route' =>
                            ['posts.update', 'post' => $post], 'method' => 'put'
                        ])
                    !!}
                    @else
                    {!! Form::open([
                        'route' => 'posts.store',
                        'files' => true
                        ]) !!}
                    @endif

                        {!! Form::label('Titre') !!}
                        {!! Form::text('title') !!}
                        <br>
                        {!! Form::label('Category') !!}
                        {!! Form::select(
                            'category_id',
                            $options
                        ) !!}
                        <br>
                        {!! Form::label('Contenu') !!}
                        {!! Form::text('content') !!}
                        <br>
                        {!! Form::label('Date') !!}
                        {!! Form::date('published_at') !!}
                        <br>
                        {!! Form::label('Image mise en avant') !!}
                        {!! Form::file('image') !!}
                        @if(
                            Route::currentRouteName() === 'posts.edit'
                            )
                        @endif
                        <br>
                        <img
                            src="{{ asset($post->getFirstMediaUrl('posts')) }}"
                        />
                        {!! Form::submit() !!}

                    {!! Form::close() !!}
                </ul>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
