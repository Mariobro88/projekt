@extends('layout-admin')

@section('content')

    <table class="table table=hover">
        @foreach($dane as $item)
            <tr>
                <td>  {{$item['id']}}</td>
                <td>  {{$item['name']}}</td>
                <td><a class="btn btn-primary" href="{{route('categories.edit', $item)}}">Edytuj</a></td>
            </tr>


        @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('categories.create')}}">Dodaj</a>
    {{$dane->links()}}
@endsection