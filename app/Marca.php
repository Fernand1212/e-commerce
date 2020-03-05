<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $primaryKey = 'idMarca';


    public function getProducto()
    {
        return $this->belongsTo('App\producto', 'Marca', 'idMarca');
    }
}
