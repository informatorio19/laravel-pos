<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['articulo','stock','precio','categoria_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

}
