<div class="row">
    <input type="hidden" name="ïd" value="{{$car->id}}" />
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Заглавие:</strong>
            <input type="text" name="name" value="{{$article->name}}"/>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group col-md-5">
            <strong>Autor:</strong>
            <select name="autor.id">
                <option value="0">Please choose</option>
                @foreach($autors as $autor)
                    <option value="{{$autor->id}}">{{$autor->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <strong>Type:</strong>
            <select name="type.id">
                <option value="0">Please choose</option>
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group col-md-3">
            <strong>Description:</strong>
            <input type="text" name="name" value="{{$article->name}}"/>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Запази</button>
    </div>
</div>