@extends('layout.main')


@section('title')CASBUSAGI @endsection

@section('content')


<link rel="stylesheet" href="{{ asset('css/pag-productos.css') }}" />

<div class="portada">
    <div class="jumbotron jumbotron-fluid" style="background-color: white max-heigth: 30%">
        @foreach ($marcas as $marca)
        <div class="jumbo">
          <img src="/storage/{{$marca->mkImagen}}" alt="No se encuantra" style="max-width: 50%  max-height: 50%">
          @endforeach
        </div>
      </div>
    </div>
@foreach ($productos as $producto)
 <div class="container">
<div class="row" id="marco">
<div class="col-6 col-lg-4 col-xl-3 mb-5">

<a href="/Producto/{{$Productos->idProducto}}">
    <div class="">
<img src="/storage/{{$Productos->prdImagen}}"alt="Imagen Zapatillas">
    <div class="card-body" id="tarbody">

      <h5 class="card-title">{{$Productos->prdNombre}}</h5></a>
      {{-- <p class="card-text" >{{$Productos->prdPresentacion}}</p> --}}
       <p id="parra">${{$Productos->prdPrecio}}</p>
        <a href="">juytrfed</a>



{{--

</div>
    </div>
  </div>

  @endforeach
</div></div>
<br><br> --}}
@endsection














