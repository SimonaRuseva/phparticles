@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Автори</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Добави нов автор</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        @foreach ($autors as $autor)
            <tr>

                <td>{{ $autor->id}}</td>
                <td>{{ $autor->name}}</td>
                <td>{{ $autor->age}}</td>
                <td>

                    {{--<a class="btn btn-info" href="{{ route('articles.show',$articles->id) }}" target="_blank">Покажи</a>--}}

                    <a href="{{ URL::to('autors/' . $autor->id . '/edit') }}" class="btn btn-default">Edit</a>
                    <form action="{{action('AutorsController@destroy', $autor->id )}}" method="post" class="delete_form">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
