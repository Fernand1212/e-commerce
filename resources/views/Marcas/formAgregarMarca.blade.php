@extends('layout.plantilla')

    @section('title', 'Formulario de alta una nueva Marca')

    @section('h1', 'Formulario de alta una nueva Marca')

    @section('main')

            <div class="alert bg-light p-4">
                <form action="/agregarMarca" method="post" enctype="multipart/form-data" >
                    @csrf
                    Nombre:
                    <br>
                    <input type="text" name="mkNombre" class="form-control">
                    {!! $errors->first('mkNombre',':message')!!}
                    <br>
                    Imagen: <br>
            <input type="file" name="mkImagen" class="form-control">
            {!! $errors->first('mkImagen',':message')!!}
            <br>
            <button type="submit" class="btn btn-dark px-4">
                <i class="far fa-plus-square fa-lg mr-2"></i>
               </form>
            </div>

    @endsection
