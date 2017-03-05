@extends('layout-admin')

@section('content')

    <table class="table table=hover">
    @foreach($dane as $item)
     <tr>
         <td>  {{$item['id']}}</td>
         <td> <img width="120" src="/upload/{{ $item['name'] }}"></td>
         <td>  {{$item['description']}}</td>
         <td><a class="btn btn-primary" href="{{route('photos.edit', $item)}}">Edytuj</a></td>
         <td><a class="btn btn-danger" href="{{route('photos.delete', $item)}}">Usuń</a></td>

     </tr>

    @endforeach

    </table>
    <a class="btn btn-primary" href="{{route('photos.create')}}">Dodaj</a>
    {{$dane->links()}}
@endsection
