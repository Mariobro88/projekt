@extends('layout-admin')

@section('content')

    {!! Form::model($photo, ['route' => ['photos.update', $photo], 'enctype'=>'multipart/form-data']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('name', "Name:") !!}
        {!! Form::file('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', "Description:") !!}
        {!! Form::text('description', $photo->description, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Chess', "Chess:") !!}
        {!! Form::select('chess_id', $categories, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}
@endsection