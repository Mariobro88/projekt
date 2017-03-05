@extends('layout-admin')

@section('content')

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'categories.store']) !!}

    <div class="form-group">
        {!! Form::label('name', "Name:") !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection