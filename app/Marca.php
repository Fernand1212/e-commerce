<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $primaryKey = 'idMarca';


    public function getProducto()
    {
        return $this->hasMany('App\Producto', 'marca', 'idMarca');
    }
}
