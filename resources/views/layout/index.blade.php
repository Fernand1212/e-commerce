@extends('layout.main')
@section('content')
<!-- Carousel -->
@section('title')CASBUSAGI @endsection
<!-- Carousel -->

  <div id="carouselExampleCaptions" class="carousel slide container-fluid" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('Images/giphyfluor5.gif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <Hello text='Hola caracola'/>
          <p id="CON">CONVERSE</p>
        </div>
      </div>

      <div class="carousel-item"> <img src="{{asset('Images/giphyfluor2.gif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>SIMPLEMENTE HAZLO</h5>
          <p id="CON">NIKE</p>
        </div>
      </div>
      <div class="carousel-item "> <img src="{{asset('Images/giphyfluor6.gif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none
       d-md-block">
          <h5>ES UN MUNDO GRANDE, VE Y DISFRUTALO</h5>
          <p id="CON">CONVERSE</p>
        </div>
      </div>
      <div class="carousel-item"> <img src="{{asset('Images/giphyfluor1.gif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>NADA ES
            IMPOSIBLE</h5>
          <p>ADIDAS</p>
        </div>
      </div>
    </div> <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
  </div>




<!-- tarjetas -->

<div class="container-fluid tarjetas">
    <div class="row">
      <div class="col-md-4">
        @foreach ($marcas as $marca)<figure class="card card-product">

          <div class="img-wrap">
              <a href="/Productos/{{$marca->idMarca}}">
                  <img href="" src="/storage/{{$marca->mkImagen}}">
              </a>
          </div>
          <figcaption class="info-wrap" style="background-color: rgba(185, 182, 182, 0.904);">
            <h4 style="color:black" class="title">{{$marca->mkNombre}}</h4>
            <input type="hidden" name="idMarca">
            <p>{{$marca->Eslogan}}</</p>
          </figcaption>

        </figure>
      </div>
      <div class="col-md-4"> @endforeach



    </div>
  </div>
</div>

@endsection
