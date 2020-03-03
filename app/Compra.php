<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $Table = "compras_producto";

    public function getProducto()
    {
        return $this->belongsTo('App\Producto', 'idMarca', 'idMarca');
    }

    public function getCategoria()
    {
        return $this->belongsTo('App\Categoria', 'idCategoria', 'idCategoria');
    }
}
