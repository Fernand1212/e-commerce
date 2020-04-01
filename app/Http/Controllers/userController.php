<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
          $regla = ['avatar' => 'required|file|image|mimes:jpg,jpeg,png,bmp,gif,svg'];
          $mensaje = ['image'    => 'Las extenciones admitidas son JPG, JPEG, PNG, BMP, GIF y SVG. <br> por favor vuelva a intentarlo'];
          //validacion
         $this->validate($request,$regla,$mensaje );
         $ruta = $request->file('avatar')->store('public');
        $nombreImagen = basename($ruta);

          $Producto = User::find($request->input('id'));
          $Producto->name = $request['name'];
          $Producto->prdPrecio = $request['prdPrecio'];
          $Producto->marca = $request['idMarca'];
          $Producto->categoria = $request['idCategoria'];
          $Producto->prdStock = $request['prdStock'];
          $Producto->prdPresentacion = $request['prdPresentacion'];
          $Producto->avatar = $nombreImagen;
          $Producto->save();
          return redirect('/adminProductos')
              ->with('mensaje', 'Producto '.$Producto->nombre.' modificada con éxito');

      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()




}
