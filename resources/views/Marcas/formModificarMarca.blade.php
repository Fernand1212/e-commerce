@extends('layout.plantilla')

    @section('title', 'Formulario de modificación una Marca')

    @section('h1', 'Fornulario de modificación una Marca')

    @section('main')

            <div class="alert bg-light p-4">
                <form action="/modificarMarca" method="post" enctype="multipart/form-data" >
                    @csrf
                    Nombre:
                    <br>
                    <input type="text" name="mkNombre" value="{{ $marca->mkNombre }}" class="form-control">
                    <br>
                    <input type="file" name="mkImagen" value="{{$marca->mkImagen}} class form- control">
                    {!! $errors->first('mkImagen',':message')!!}
                    <input type="hidden" name="idMarca" value="{{ $marca->idMarca }}">
                    <br>
                    <button class="btn btn-dark">Modificar</button>

                </form>
            </div>

    @endsection
    