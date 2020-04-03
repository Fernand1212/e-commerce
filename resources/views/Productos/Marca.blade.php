@extends('layout.main')
@section('content')
@section('title')Productos @endsection
@section('link')
<link rel="stylesheet" href="{{asset ('css/pag-productos.css')}}  ">@endsection

<form class="form-inline my-2 my-lg-0" action="/Productos" method="GET" style="Margin-right:5%">
      <input class="form-control mr-sm-2" type="text"  id="search" name="search" placeholder="¿Que buscas?">

      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" >Buscar</button>
      
    </form>




<p class="text-center" id="buscado" >
      @if (isset($marca)) <img id="portada"  src="/storage/{{$marca->mkImagen}}" alt="" style="max-width:20em; max-height: 20em; ">
    @endif
    </p>

      </div>
    </div>
  </div>
  <div class="container" id="esto">
    <div class="row" id="marco" id="buscado">

        @foreach( $productos as $producto)

    <div 
    class="col-6 col-lg-4 col-xl-3 mb-5">
    <a href="/Producto/{{$producto->idProducto}}">
        <div  class="card" id="tar">
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
</div>


</div>
</div>
@endsection

<script src="js/buscador.js"></script>