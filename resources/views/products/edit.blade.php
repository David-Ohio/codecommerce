
@extends('app')

    @section('content')
        <div class="container">
            <h1>Edit Category: {{$product->name}}</h1>
            @if($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>
            @endif
            {!! Form::open(['route'=>['products.update',$product->id], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('Name:')!!}
                    {!! Form::text('name',$product->name,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description:')!!}
                    {!! Form::textarea('description',$product->description,['class'=>'form-control'])!!}
                </div>
            <div class="form-group">
                {!! Form::label('Price:')!!}
                {!! Form::text('price',$product->price,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('Featured:')!!} {!! Form::checkbox('featured')!!}
            </div>
            <div class="form-group">
                {!! Form::label('Recommended:')!!} {!! Form::checkbox('recommended')!!}
            </div>
            <div class="form-group">
                {!! Form::submit('Save Product', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    @endsection