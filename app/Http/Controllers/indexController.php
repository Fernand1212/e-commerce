<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
class indexController extends Controller
{
    public function Home(){
        $Marcas = Marca::paginate(3);
        return view('/layout/index', compact('Marcas', $Marcas));
    }
public function Perfil(){
  return view('/Users/Perfil');
 
}
   
}

