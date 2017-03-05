@extends('layout-admin')

@section('content')

    {!! Form::model($category, ['route' => ['categories.update', $category]]) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('name', "Name:") !!}
        {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}
@endsection