
@extends('app')

    @section('content')
        <div class="container">
            <h1>Create Product</h1>
            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['route'=>'products.store']) !!}
                <div class="form-group">
                    {!! Form::label('Name:')!!}
                    {!! Form::text('name',null,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description:')!!}
                    {!! Form::textarea('description',null,['class'=>'form-control'])!!}
                </div>
            <div class="form-group">
                {!! Form::label('Price:')!!}
                {!! Form::text('price',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('Featured:')!!} {!! Form::checkbox('featured')!!}
            </div>
            <div class="form-group">
                {!! Form::label('Recommended:')!!} {!! Form::checkbox('recommended')!!}
            </div>
                <div class="form-group">
                    {!! Form::submit('Add Product', ['class'=>'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    @endsection