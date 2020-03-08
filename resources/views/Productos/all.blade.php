@extends('layout.main')
@section('content')
@section('title')Productos @endsection
@section('link')
<link rel="stylesheet" href="css/pag-productos.css">@endsection

<div id="hoy">
  <div class="portada">
    <div class="jumbotron jumbotron-fluid" style="background-color: white; ">
      <div class="jumbo">
        <img src="img/logos.gif" alt="" style="max-width: 50%; max-height: 50%;">
      </div>
    </div>
  </div>


  <section id="zapatillas">
    @foreach ($productos as $producto)
    <div id="hola" class="card" style="width: 18rem;">
      <a href="perfilproducto.html"> <img id="hola2" src="storage/{{$producto->prdImagen}}" class="card-img-top" alt="..."></a>
      <div class="card-body">
        <div id="nomb">
          <h2>{{$producto->prdNombre}}</h2>
        </div>
        <div id="dos">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div id="uno">
          <p style="background-color: rgba(3, 3, 3, 0.425)" ; class="card-text">{{$producto->prdPrecio}}</p>
          <div class="iconitos">
            <i class="fa fa-heart-o"></i>
            <i class="fa fa-shopping-cart"></i>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>
</div>
</div>

@endsection
