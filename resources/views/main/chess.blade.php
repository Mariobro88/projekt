@extends('layout')
@section('body')

        @foreach($chess as $item)

                <h2>
                    <a href="{{route('main.show', $item['id'])}}"> {{$item['name']}}</a>
                </h2>



                <p><i class="fa fa-clock-o"></i>{{$item['created_at']}}</p>
                <a href="{{route('main.show', $item['id'])}}">
                    <img class="img-responsive img-hover" src="/upload/{{$item->photo->first()['name']}}" alt="">
                </a>

                <hr>
                <a class="btn btn-primary" href="#">OPIS <i class="fa fa-angle-right"></i></a>
                <hr>
        @endforeach
@endsection