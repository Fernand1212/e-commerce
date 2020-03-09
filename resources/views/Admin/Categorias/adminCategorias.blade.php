@extends('layout.plantilla')

    @section('title', 'Panel de Categorías')

    @section('h1', 'Panel de Categorías')

    @section('main')

        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="/formAgregarCategoria" class="btn btn-success">Agregar</a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach( $categoria as $cat )
                <tr>
                    <td>{{$cat->idCategoria}}</td>
                    <td>{{$cat->catNombre}}</td>
                    <td>
                        <a href="/formModificarCategoria/{{$cat->idCategoria}}" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                    <form action="/eliminarCategoria" method="post">
                    @csrf
                    <input type="hidden" name="idCategoria" value="{{$cat->idCategoria}}">
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                   </td></form>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $categoria->links() }}


    @endsection
