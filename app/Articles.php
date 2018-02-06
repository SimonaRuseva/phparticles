<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = "articles";
    protected $fillable = ["type_id","autor_id","title","description"];
    public function autors(){
        return $this->belongsTo('App\Autors', 'autor_id');
    }
    public function types(){
       return $this->belongsTo('App\Types', 'type_id');
    }
}
