@extends('layout-admin')


@section('content')




    <table class="table table=hover">
        @foreach($chess as $item)

            <tr>
                <td>  {{$item['id']}}           </td>
                <td>  {{$item['price']}}        </td>
                <td>  {{$item['name']}}  </td>
                <td>  {{$item['rating']}}       </td>
                <td>  {{$item['categories_id']}}</td>
                <td><a class="btn btn-primary" href="{{route('chess.edit', $item)}}">Edytuj</a></td>
            </tr>


        @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('chess.create')}}">Dodaj</a>
    {{$chess->links()}}

@endsection