@extends('layout.main')
@section('content')
@section('title')Productos @endsection
@section('link')
<link rel="stylesheet" href="{{asset ('css/pag-productos.css')}}  ">@endsection





    {{-- <div class="portada">
        <div class="jumbotron jumbotron-fluid" style="background-color: white; max-heigth: 30%; ">
      <div class="jumbo">


       <img src="/storage/{{$marca->mkImagen}}" alt="" style="max-width: 50%; max-height: 50%;">


      </div>
    </div>
  </div> --}}


  @foreach( $productos as $producto)
  <div class="container">
    <div class="row" id="marco">
        <div class="col-6 col-lg-4 col-xl-3 mb-5">
        <a href="/Producto/{{$producto->idProducto}}">
            <div  class="card" style=""id="tar">
        <img id="hola2" src="/storage/{{$producto->prdImagen}}" class="card-img-top" alt="..."></a>
      <div class="card-body" id="tarbody">
          <h5  class="card-title">
            {{$producto->prdNombre}}

          </h5>
         <div>
          <p  class="card-text" id="parra">${{$producto->prdPrecio}}</p>
          {{-- <div class="iconitos"> --}}
          {{-- <a href=""> <i class="fa fa-shopping-cart"></i></a> --}}
          {{-- </div> --}}
         </div>
      </div>
            </div>
        </div>
      </div>
        </div>
      </div>
    </div>
 @endforeach



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
