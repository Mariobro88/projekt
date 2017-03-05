@extends('layout-admin')

@section('content')

    {!! Form::model($chess, ['route' => ['chess.update', $chess]]) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('price', "price:") !!}
        {!! Form::text('price', $chess->price, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', "name:") !!}
        {!! Form::text('name', $chess->name, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', "Opis:") !!}
        {!! Form::textarea('description', $chess->description, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('rating', "rating:") !!}
        {!! Form::text('rating', $chess->rating, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('categories_id', "categories_id:") !!}
        {!! Form::select('categories_id', $categories, $chess->category_id, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>




    {!! Form::close() !!}
@endsection