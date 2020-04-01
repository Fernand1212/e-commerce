@extends('layout.main')
@section('content')
@section('title')CASBUSAGI @endsection



<link rel="stylesheet" href="{{ asset('css/producto.css') }}" />

<link type="text/css" href="zoomy.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
<script type="text/javascript" src="zoomy.min.js"></script>
<script type="text/javascript">
$(function () {
    $('.zoom').zoomy();
});
</script>

<div class="row">

    <ul style="background-color:rgb(108, 117, 125); color:white;">
<div class="d-flex p-2 bd-highlight" id="Info"
style="padding:5%">
    <header class="">
        <h1 class="tres">{{$producto->prdNombre}}</h1>
          <div class="entry-meta">

    <div class="product-price">${{$producto->prdPrecio}}
        <br>
	<span>Precio Sugerido</span>
                </div>
                <div class="card-body" style="width:40%;">
                <p> Descripcion:
                 {{$producto->prdPresentacion}} </p>
                   </div>

                   <button class="btn btn-warning">Comprar</button>
        <div class="hidden-sm-down">
     <div class="product-sku"></div>
          </div>
    </div>
        </div>  <!-- hidden mobile meta -->
         <!-- .entry-meta -->
      </header>
</ul>


    <ul>
<div id="Foto" class="row hidden-md-up">
    <div class="product-content col-12">
      <div class="product-gallery-mobile">
    <img width="640" height="640" class="img-fluid" style="margin:2%" src="/storage/{{$producto->prdImagen}}" class="attachment-large size-large wp-post-image" alt="" sizes="(max-width: 640px) 100vw, 640px">
</div>
</ul>


</div>

    @endsection
