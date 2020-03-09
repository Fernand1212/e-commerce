<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'idCategoria';

    public function getProducto()
    {
        return $this->hasMany('App\Producto', 'categoria', 'idCategoria');
    }
}
