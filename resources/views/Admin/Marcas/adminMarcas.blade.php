@extends('layout.plantilla')

    @section('title', 'Panel de Marcas')

    @section('h1', 'Panel de Marcas')

    @section('main')

        {{-- mensajes de ok --}}
        @if( session()->has('mensaje') )
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif

        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Marca</th>
                <th>Eslogan</th>
                <th>Logo</th>
                <th colspan="2">
                    <a href="/formAgregarMarca" class="btn btn-success">Agregar</a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach( $marcas as $marca )
                    <tr>
                    <td>{{$marca->idMarca}}</td>
                    <td>{{$marca->mkNombre}}</td>
                    <td>{{$marca->Eslogan}}</td>
                    <td><img src="/storage/{{$marca->mkImagen}}" height="100" width="120"> </td>
                    <td>
                        <a href="/formModificarMarca/{{$marca->idMarca}}" class="btn btn-dark">
                            Modificar
                        </a>
                    </td>
                    <td>
                    <form action="/eliminarMarca" method="post">
                    @csrf
                    <input type="hidden" name="idMarca" value="{{$marca->idMarca}}">
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                   </td></form>
                     </tr>
            @endforeach
            </tbody>
        </table>

        {{ $marcas->links() }}


    @endsection
