@extends('layout.main')
@section('content')
@section('title')Productos @endsection
@section('link')
<link rel="stylesheet" href="{{asset ('css/pag-productos.css')}}  ">@endsection





    <div  >
        <div class="">
      <div ">

<p class="text-center">
       <img id="portada"  src="/storage/{{$marca->mkImagen}}" alt="" style="max-width:20em; max-height: 20em; ">
</p>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row" id="marco">
        @foreach( $productos as $producto)
    <div style=""
    class="col-6 col-lg-4 col-xl-3 mb-5">
    <a href="/Producto/{{$producto->idProducto}}">
        <div  class="card" id="tar">
    <img src="/storage/{{$producto->prdImagen}}" class="card-img-top" alt="Imagen Zapatillas">
        <div class="card-body" id="tarbody">

          <h5 class="card-title">{{$producto->prdNombre}}</h5>
          {{-- <p class="card-text" >{{$Productos->prdPresentacion}}</p> --}}
          <br>
          <p id="parra" c">${{$producto->prdPrecio}}</p>
    </a>

    </div>
        </div>
      </div>

      @endforeach

</div>

</div>
</div>





{{--
  <section id="zapatillas">


  @foreach( $productos as $producto)

    <div id="hola" class="card" style="width: 18rem;">
      <a href="perfilproducto.html"> {{$producto->prdNombre}}<img id="hola2" src="/storage/{{$producto->prdImagen}}" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <div id="nomb">
          <h2>
          {{$producto->prdPresentacion}}
          </h2>
        </div>
         <div id="uno">
          <p style="background-color: rgba(3, 3, 3, 0.425)"  class="card-text">${{$producto->prdPrecio}}</p>
          <div class="iconitos">
          <a href=""> <i class="fa fa-shopping-cart"></i></a>
          </div>
        </div>
      </div>
    </div>
   @endforeach

    </section> --}}

</div>
</div>

@endsection
