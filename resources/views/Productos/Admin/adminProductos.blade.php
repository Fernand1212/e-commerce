@extends('layout.plantilla')

    @section('title', 'Panel de Productos')

    @section('h1', 'Panel de Productos')

    @section('main')

        <table class="table table-hover table-striped table-border">
            <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Presentacion</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th colspan="2">
                    <a href="/formAgregarProducto" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
        @foreach( $productos as $producto )
            <tr>
                <td>{{ $producto->prdNombre }}</td>
                <td>{{ $producto->prdPrecio }}</td>
                <td>{{ $producto->getMarca->mkNombre }}</td>
                <td>{{ $producto->getCategoria->catNombre }}</td>
                <td>{{ $producto->Presentacion }}</td>
                <td>{{ $producto->prdStock }}</td>
                <td><img src="storage/{{ $producto->prdImagen }}" class="img-thumbnail"></td>
                <td>
                <a href="/formModificarProducto/{{$producto->idProducto}}" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                </td>
                <td>
                <form action="/eliminarProducto" method="post">
                    @csrf
                    <input type="hidden" name="idProducto" value="{{$producto->idProducto}}">
                    <input type="submit" value="Eliminar" class="btn btn-danger">
                   </td></form>
            </tr>
        @endforeach
        @link
            </tbody>
        </table>

    @endsection
