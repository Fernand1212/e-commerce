<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $marcas = Marca::paginate(8);
        return view('Marcas/adminMarcas',
                [
                    'marcas'=>$marcas
                ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Marcas/formAgregarMarca');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    { $regla = ['mkImagen' => 'required|file|image|mimes:jpg,jpeg,png,bmp,gif,svg'];
        $mensaje = ['image'    => 'Las extenciones admitidas son JPG, JPEG, PNG, BMP, GIF y SVG. <br> por favor vuelva a intentarlo'];
        //validacion
$this->validate($req,$regla,$mensaje );
$ruta = $req->file('mkImagen')->store('public');
    $nombreImagen = basename($ruta);
        $mkNombre = $req->input('mkNombre');
        $Eslogan = $req->input('Eslogan');
        $Marca = new Marca;
        $Marca->mkNombre = $mkNombre;
        $Marca->Eslogan = $Eslogan;
        $Marca->mkImagen = $nombreImagen;
        $Marca->created_at = date('Y-m-d H:i:s');
        $Marca->save();
        return redirect('/adminMarcas')
            ->with('mensaje', 'Marca '.$Marca->mkNombre.' agregada con éxito');
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
        $marca = Marca::find($id);
        return view('Marcas/formModificarMarca', [ 'marca'=>$marca ]);
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
        //
        $Marca = Marca::find($request->input('idMarca'));
        $Marca->mkNombre = $request->input('mkNombre');
        $Marca->save();
        return redirect('Marcas/adminMarcas')
            ->with('mensaje', 'Marca '.$Marca->mkNombre.' modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    { $id = $req['idMarca'];
        $marca = Marca::find($id);
        $marca->delete();
        return redirect('/adminMarcas')->with('mensaje', 'Marca' .$marca->mkNombre.'eliminada con éxito');


    }
}
