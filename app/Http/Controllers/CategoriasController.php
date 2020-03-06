<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoria = Categoria::paginate(6);
        return view('Categorias/adminCategorias', [ 'categoria' =>  $categoria ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Categorias/formAgregarCategoria');
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
        $categoria = new Categoria();
        ######## validacion
        $validacion = $request->validate(
            [
                'catNombre' => 'required|min:3|max:75',
            ]
        );
        $categoria->catNombre = request('catNombre');
        $categoria->save();
        return redirect('/adminCategorias')->with('mensaje', 'Categoria '.$categoria->catNombre.' agregada con éxito');
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
        $categoria = Categoria::find($id);
        return view('Categorias/formModificarCategoria', [ 'categoria'=>$categoria ]);
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
        $Categoria = Categoria::find($request->input('idCategoria'));
        $Categoria->catNombre = $request->input('catNombre');
        $Categoria->save();
        return redirect('/adminCategorias')
            ->with('mensaje', 'Categoria '.$Categoria->catNombre.' modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $id = $req['idCategoria'];
        $Categoria = Categoria::find($id);
        $Categoria->delete();
        return redirect('/adminCategorias')->with('mensaje', 'Categoria ' .$Categoria->catNombre.' eliminada con éxito');
        
    }
}
