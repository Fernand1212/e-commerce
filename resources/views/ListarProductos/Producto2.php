
@extends('layout.main')


@section('title')CASBUSAGI @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/producto.css') }}" />

<link type="text/css" href="zoomy.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
<script type="text/javascript" src="zoomy.min.js"></script>
<script type="text/javascript">
$(function () {
    $('.zoom').zoomy();
});
</script>
<div class="row hidden-md-up">
    <div class="product-content col-12">

      <div class="product-gallery-mobile">
    <img width="640" height="640" src="/storage/{{$producto->prdImagen}}" class="attachment-large size-large wp-post-image" alt="" sizes="(max-width: 640px) 100vw, 640px">
</div>
    {{-- <div class="row">
    <div class="col-md-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
     <div class="carousel-item active" id="Foto">

        <a href="/storage/{{$producto->prdImagen}}" class="zoom"><img src="/storage/{{$producto->prdImagen}}" width="320px" height="240px" /></a>
    <img src="" id="img_01" class="d-block w-100">
     </div>
     <div class="carousel-item">
        <a href="/storage/{{$producto->prdImagen}}" class="zoom"><img src="/storage/{{$producto->prdImagen}}" width="320px" height="240px" /></a>
        <img src="" id="img_01" class="d-block w-100">
    </div>
    <div class="carousel-item">
        <a href="/storage/{{$producto->prdImagen}}" class="zoom"><img src="/storage/{{$producto->prdImagen}}" width="320px" height="240px" /></a>
        <img src="" id="img_01" class="d-block w-100">
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a> --}}
<div style="background-color:rgb(230, 220, 228); padding:5%">
<header class="entry-header col-md-3">
    <h1 class="entry-title">{{$producto->prdNombre}}</h1>
      <div class="entry-meta">

            <div class="product-price">${{$producto->prdPrecio}}     		<span>Precio Sugerido</span>
            </div>
    <div class="hidden-sm-down">
 <div class="product-sku"></div>
      </div>
</div>
    </div>  <!-- hidden mobile meta -->
  </div>    <!-- .entry-meta -->
  </header>







        {{-- <div class="Contenedor-tarjeta">
            <div class="container-card">
        <div class="col-md-7">
            {{-- <p class="newarrival text-center"> NEW </p>
     <ul>
       <a href=""  style="width:10em" class="btn btn-warning float-right">Comprar</a>

     </ul>

            <h2>{{$producto->prdNombre}}</h2>

            <p style="Font-size:2rem" class="precio">${{$producto->prdPrecio}}</p>
 --}}

        {{-- <div class="talles">
          <h3>Selecciona tu Talle:</h3>
          <div style="width: 10%;" class="btn-group btn-group-toggle" data-toggle="buttons" class="talles-btn">
           <label class="btn btn-secondary">
           <input type="radio" name="talles" class="talle" autocomplete="off" > 38</label>
          <label class="btn btn-secondary">
          <input type="radio" name="talles" class="talle" autocomplete="off"> 39</label>
          <label class="btn btn-secondary">
          <input type="radio" name="talles" class="talle" autocomplete="off";> 40 </label>
          <label class="btn btn-secondary">
         <input type="radio" name="talles" class="talle" autocomplete="off" > 41 </label>
         <label class="btn btn-secondary">
         <input type="radio" name="talles" class="talle" autocomplete="off"> 42 </label>
        </div>
        </div>
    <div style="position: relative;">
            <div class="mr-5 accordion " id="accordionExample" style="position: absolute; left:30%">
                <div class="row row-cols-4">
                <div class="card " style="background-color:rgb(83, 79, 102);">
                  <div class="" id="headingOne">
                    <h2 class="mb-0">
                      <button style="text-decoration: none; color:white;min-width:10em ; " class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <b>  Descripcion</b>
                      </button>
                    </h2>
                  </div>
                </div>
                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                     {{$producto->prdPresentacion}}
                    </div>
                  </div>
                </div>
                <div class="mr-5 accordion" id="accordionExample">
                    <div class="row row-cols-4">
                    <div class="card" style="background-color:rgb(83, 79, 102);">
                  <div class="" id="headingTwo">
                    <h2 class="mb-0">
                      <button style="text-decoration: none; color:white; min-width:10em " class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     <b> Metodos de Pago</b>
                      </button>
                    </h2> </div>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat aspernatur beatae dolor dolores voluptate eum ipsa! Illum debitis eaque, eum asperiores alias laboriosam cupiditate fugiat earum at, qui exercitationem nam?

    </div></div></div>

                    </div>
                  </div>
                    </div>
                </div>
            </div>
    </div><br><br><br><br><br><br><br><br><br><br></div></div>


    <br>

--}}
    </div>

@endsection
