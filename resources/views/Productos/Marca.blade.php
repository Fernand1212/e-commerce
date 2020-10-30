@extends('layout.main')
@section('content')
@section('title')Productos @endsection
@section('link')
<link rel="stylesheet" href="{{asset ('css/pag-productos.css')}}  ">@endsection






<p class="text-center">
  @if (isset($marca)) <img id="portada" src="/storage/{{$marca->mkImagen}}" alt="" style="max-width:20em; max-height: 20em; ">
  @endif
</p>




<section id="resultado">
<div class="container">
  <div class="row" id="marco">


@foreach( $productos as $producto)
    <div class="col-2 col-lg-4 col-xl-3 mb-2">

      <a href="/Producto/{{$producto->idProducto}} ">
        <div class="card" id="tar">
          <img src="/storage/{{$producto->prdImagen}}" class="card-img-top" alt="Imagen Zapatillas">
          <div class="card-body" id="tarbody">

            <h5 class="card-title">{{$producto->prdNombre}}</h5>
            {{-- <p class="card-text" >{{$Productos->prdPresentacion}}</p> --}}
            <br>
            <p id="parra">${{$producto->prdPrecio}}</p>
      </a>
      <a style="float: right" href="/Producto/{{$producto->idProducto}}">Ver mas...</a>

    </div>
  </div>
</div>
@endforeach
</div>
</div>
</section>


@endsection
<script src="js/buscador.js"></script>
