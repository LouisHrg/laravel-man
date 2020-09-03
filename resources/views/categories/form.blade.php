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

                    @if(Route::currentRouteName() === 'categories.edit')
                    {!! Form::model(
                        $category,
                        ['route' =>
                            ['categories.update', 'category' => $category]
                        ])
                    !!}
                    @else
                    {!! Form::open(['route' => 'categories.store']) !!}
                    @endif

                        {!! Form::label('Name') !!}
                        {!! Form::text('name') !!}

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
