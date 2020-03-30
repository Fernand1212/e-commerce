<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public function getProducto()
    {
        return $this->belongsTo('App\Producto');
    }
    
    public function getUser(){
        return $this->belongsTo('App\User', 'usuario_id' );
    }
}
