@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Заглавия</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('types.create') }}"> Добави ново заглавие</a>
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
            <th>Actions</th>

        </tr>
        @foreach ($types as $type)
            <tr>

                <td>{{ $type->id}}</td>
                <td>{{ $type->name}}</td>

                <td>

                    {{--<a class="btn btn-info" href="{{ route('articles.show',$articles->id) }}" target="_blank">Покажи</a>--}}

                    <a href="{{ URL::to('types/' . $type->id . '/edit') }}" class="btn btn-default">Edit</a>
                    <form action="{{action('TypesController@destroy', $type->id )}}" method="post" class="delete_form">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
