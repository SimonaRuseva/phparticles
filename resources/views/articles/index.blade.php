@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ститии</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Добави нова статия</a>
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
            <th>type</th>
            <th>autor</th>
            <th>title</th>
            <th>description</th>
            <th>Actions</th>



        </tr>
        @foreach ($articles as $article)
            <tr>
                <td id="thumbnailId{{ $article->id }}">
                    {{ $article->id}}
                </td>

                <td>{{ $article->types->name}}</td>
                <td>{{ $article->autors->name}}</td>
                <td>{{ $article->title}}</td>
                <td>{{ $article->description}}</td>
                <td>


                    <a href="{{ URL::to('autors/' . $article->id . '/edit') }}" class="btn btn-default">Edit</a>
                    <form action="{{action('ArticlesController@destroy', $article->id )}}" method="post" class="delete_form">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
