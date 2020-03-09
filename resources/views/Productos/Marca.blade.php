@extends('layout.main')
@section('content')
@section('title')Productos @endsection
@section('link')
<link rel="stylesheet" href="{{asset ('css/pag-productos.css')}}  ">@endsection




<div id="hoy">
  <div class="portada">
    <div class="jumbotron jumbotron-fluid" style="background-color: white; ">
      <div class="jumbo">


       <img src="/storage/{{$marca->mkImagen}}" alt="" style="max-width: 50%; max-height: 50%;">


      </div>
    </div>
  </div>






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

    </section>

</div>
</div>

@endsection
