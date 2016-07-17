
@extends('app')

    @section('content')
        <div class="container">
            <h1>Edit Category: {{$category->name}}</h1>
            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['route'=>['categories.update',$category->id], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('Name:')!!}
                    {!! Form::text('name',$category->name,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description:')!!}
                    {!! Form::textarea('description',$category->description,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Save Category', ['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    @endsection