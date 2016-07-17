
@extends('app')

    @section('content')
        <div class="container">
            <h1>Create Category</h1>
            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['route'=>'categories.store']) !!}
                <div class="form-group">
                    {!! Form::label('Name:')!!}
                    {!! Form::text('name',null,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description:')!!}
                    {!! Form::textarea('description',null,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Add Category', ['class'=>'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    @endsection