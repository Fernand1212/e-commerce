<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::with('getMarca', 'getCategoria')->get();
        return view('Productos/adminProductos',
            [
                'productos'=>$productos
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('Productos/formAgregarProducto',
            [
                'marcas'=>$marcas,
                'categorias'=>$categorias
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
    /* Validación */
       $reglas = [
       'prdNombre' => 'string|unique:productos:prdNombre|required',
       'prdPrecio' => 'numeric|min:1000|required',
       'prdImagen' => 'required|file|image|mimes:jpg,jpeg, png, bmp, gif, svg',
       'prdPresentacion' => 'string|required|min:20'
       ];
       $mensajes = [
           'required' => 'Este campo es obligatorio',
           'min'      => 'El precio minimo es de $1.000',
           'numeric'  => 'El precio debe estar representado por nùmeros',
           'image'    => 'Las extenciones admitidas son JPG, JPEG, PNG, BMP, GIF y SVG. <br> por favor vuelva a intentarlo'
       ];
       $this->validate($req,$reglas,$mensajes);
    /* pdrImagen */
    $ruta = $req->file('prdImagen')->store('public');
    $nombreImagen = basename($ruta);
    /* Guardar */
       $producto = new Producto;
       $producto->prdNombre = $req('prdNombre');
       $producto->prdPrecio = $req('prdPrecio');
       $producto->idMarca = $req('idMarca');
       $producto->idCategoria = $req('idCategoria');
       $producto->idMarca = $req('idMarca');
       $producto->prdPresentacion = $req('prdPresentacion');
       $producto->created_at = date('Y-m-d H:i:s');
       $producto->prdImagen = $nombreImagen;
       $producto->save();
       return redirect('/adminProductos')
            ->with('mensaje', 'Producto '.$producto->prdnombre.' agregada con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
