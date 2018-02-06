@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                    <form method="post" action="{{action('TypesController@update', $types->id)}}" enctype="multipart/form-data">

                        <div class="form-group row">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PATCH">
                            <label for="lgFormGroupInput" style="clear:left" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-group-lg" value="{{$types->name}}" id="lgFormGroupInput" placeholder="name" name="name">

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