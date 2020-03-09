<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Marca;
use App\Producto;
class indexController extends Controller
{
    public function Home(){
      $categorias = new Categoria;
        $marcas = Marca::paginate(3);
        $productos = Producto::all();
        return view('/layout/index',['marcas' =>$marcas,
        'categorias'=> $categorias,
        'productos'=>$productos]);
    }

protected function Perfil(){
  return view('/Users/Perfil');
}

public function Contacto() {
  return view('/Contacto');
}

}
