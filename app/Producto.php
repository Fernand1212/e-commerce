<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

protected $primaryKey = 'idProducto';

    public function getMarca()
    {
        return $this->belongsTo('App\Marca', 'marca', 'idMarca');
    }

    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria', 'idCategoria');
    }
// public function archivo()
// {
//     return $this->hasMany('Archivo','idProducto');
// }





}
