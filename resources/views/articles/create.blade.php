@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                    <form method="post" action="{{url('articles')}}" enctype="multipart/form-data">

                        <div class="form-group row">
                            {{csrf_field()}}
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Type</label>
                            <div class="col-sm-10">
                                <select name="type_id">
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <label for="lgFormGroupInput" style="clear:left" class="col-sm-2 col-form-label col-form-label-lg">Author</label>
                            <div class="col-sm-10">
                                <select name="autor_id">
                                    @foreach($autors as $autor)
                                        <option value="{{$autor->id}}">{{$autor->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label for="lgFormGroupInput" style="clear:left" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-group-lg" id="lgFormGroupInput" placeholder="title" name="title">
                            </div>
                            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-group-lg" id="lgFormGroupInput" placeholder="description" name="description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2"></div>
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection