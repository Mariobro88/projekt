@extends('layout')
@section('body')



        <h2>
            <a href="{{route('main.show', $chess['id'])}}"> {{$chess['name']}}</a>
        </h2>



        <p><i class="fa fa-clock-o"></i>{{$chess['created_at']}}</p>

        @foreach($chess->photo as $photo)

            <img class="img-responsive img-hover" src="/upload/{{$photo['name']}}" alt="">
       @endforeach

        <hr>
       {{$chess['description']}}
        <hr>

@endsection