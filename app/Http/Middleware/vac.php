<?php

namespace App\Http\Middleware;

use Closure;
use App\Marca;
use App\Categoria;
class vac
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {    $marcas = Marca::all();
         $categorias = Categoria::all();
        return  $next($request, ['marcas' => $marcas,
       'categorias' => $categorias,
      ]);
    }
}
