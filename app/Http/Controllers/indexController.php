<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Marca;
use App\Producto;
class indexController extends Controller
{
    public function Home(){

      $categorias = Categoria::all();
        $marcas = Marca::paginate(5);
        $productos = Producto::all();
        session(['marcas'=>$marcas,
      'categorias'=> $categorias]);
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

public function faq(){
  return view('/faq');
}

}
