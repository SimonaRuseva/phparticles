<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autors extends Model
{
    protected $table = "autors";
    protected $fillable = ["name","age"];

}
