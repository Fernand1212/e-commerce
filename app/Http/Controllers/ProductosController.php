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
        return view('/Admin/Productos/adminProductos',
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
        return view('Admin/Productos/formAgregarProducto',
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
       'prdNombre' => 'string|unique:productos|required',
       'prdPrecio' => 'numeric|min:1000|required',
       'prdImagen' => 'required|file|image|mimes:jpg,jpeg, png, bmp, gif, svg',
       'prdPresentacion' => 'string|required|min:20'
       ];
       $mensajes = [
           'required' => 'Este campo es obligatorio',
           'pdrImagen.min'      => 'El precio minimo es de $1.000',
           'numeric'  => 'El precio debe estar representado por nùmeros',
           'image'    => 'Las extenciones admitidas son JPG, JPEG, PNG, BMP, GIF y SVG. <br> por favor vuelva a intentarlo'
       ];

       $this->validate($req,$reglas,$mensajes);
    /* pdrImagen */
    $ruta = $req->file('prdImagen')->store('public');
    $nombreImagen = basename($ruta);
    /* Guardar */

       $producto = new Producto;
       $producto->prdNombre = $req['prdNombre'];
       $producto->prdPrecio = $req['prdPrecio'];
       $producto->marca = $req['idMarca'];
       $producto->categoria = $req['idCategoria'];
       $producto->prdStock = $req['prdStock'];
       $producto->prdPresentacion = $req['prdPresentacion'];
       // $producto->created_at = date('Y-m-d H:i:s');
       $producto->prdImagen = $nombreImagen;
       $producto->save();

       return redirect('/adminProductos')
            ->with('mensaje', 'Producto '.$producto->prdNombre.' agregada con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idMarca,$idCat = null)
    {

       $marca = Marca::find($idMarca);
       $categorias = Categoria::find($idCat);
       $productos = Producto::where('marca',$idMarca)->orWhere('categoria',$idCat)->get();
       return view('/Productos/Marca',[
        'marca' =>$marca,
        'categorias' => $categorias,
        'productos'=>$productos

        ]
        );
    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $marcas = Marca::all();
        $categorias = Categoria::all();
        $producto = Producto::find($id);
        return view('Admin/Productos/formModificarProducto', [
            'producto'=>$producto,
            'marcas' => $marcas,
            'categorias' => $categorias ]);
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


        $regla = ['prdImagen' => 'required|file|image|mimes:jpg,jpeg,png,bmp,gif,svg'];
        $mensaje = ['image'    => 'Las extenciones admitidas son JPG, JPEG, PNG, BMP, GIF y SVG. <br> por favor vuelva a intentarlo'];
        //validacion
$this->validate($request,$regla,$mensaje );
$ruta = $request->file('prdImagen')->store('public');
    $nombreImagen = basename($ruta);

        $Producto = Producto::find($request->input('idProducto'));
        $Producto->prdNombre = $request['prdNombre'];
        $Producto->prdPrecio = $request['prdPrecio'];
        $Producto->marca = $request['idMarca'];
        $Producto->categoria = $request['idCategoria'];
        $Producto->prdStock = $request['prdStock'];
        $Producto->prdPresentacion = $request['prdPresentacion'];
        $Producto->prdImagen = $nombreImagen;
        $Producto->save();
        return redirect('/adminProductos')
            ->with('mensaje', 'Producto '.$Producto->prdNombre.' modificada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    { $id = $req['idProducto'];
        $Producto = Producto::find($id);
        $Producto->delete();
        return redirect('/adminProductos')->with('mensaje', 'Producto ' .$Producto->prdNombre.' eliminada con éxito');


    }

    public function perfil($nombre){

    }


}
