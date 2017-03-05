@extends('layout-admin')

@section('content')

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'chess.store']) !!}

    <div class="form-group">
        {!! Form::label('price', "price:") !!}
        {!! Form::text('price', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', "name:") !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', "Opis:") !!}
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('rating', "rating:") !!}
        {!! Form::text('rating', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', "categories_id:") !!}
        {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection