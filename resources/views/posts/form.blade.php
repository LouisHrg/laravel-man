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
                            ['posts.update', 'post' => $post]
                        ])
                    !!}
                    @else
                    {!! Form::open(['route' => 'posts.store']) !!}
                    @endif

                        {!! Form::label('Titre') !!}
                        {!! Form::text('title') !!}

                        {!! Form::select(
                            'category_id',
                            $options
                        ) !!}

                        {!! Form::label('Contenu') !!}
                        {!! Form::text('content') !!}

                        {!! Form::label('Date') !!}
                        {!! Form::date('published_at') !!}

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
