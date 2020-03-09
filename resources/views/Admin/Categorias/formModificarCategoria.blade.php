@extends('layout.plantilla')

    @section('title', 'Formulario de modificación de Categoria')

    @section('h1', 'Formulario de modificación de Categoria')

    @section('main')

            <div class="alert bg-light p-4">
                <form action="/modificarCategoria" method="post" >
                    @csrf
                    Nombre:
                    <br>
                    <input type="text" name="catNombre" value="{{ $categoria->catNombre }}" class="form-control">
                    <br>
                    <input type="hidden" name="idCategoria" value="{{ $categoria->idCategoria }}">
                    <br>
                    <button class="btn btn-dark">Modificar</button>

                </form>
            </div>

    @endsection
    