@extends('layout.main')
@section('content')
 <!-- Carousel -->

<div class="container-fluid bd-example pt-2">
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
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
           <h5>CONOCE TUS LIMITES Y LUEGO DESAFIALOS</h5>
           <p id="CON">CONVERSE</p>
         </div>
       </div>

       <div class="carousel-item"> <img
       src="{{asset('Images/giphyfluor2.gif')}}" class="d-block w-100"
       alt="..."> <div class="carousel-caption d-none d-md-block">
       <h5>SIMPLEMENTE HAZLO</h5> <p id="CON">NIKE</p> </div> </div> <div
       class="carousel-item "> <img src="{{asset('Images/giphyfluor6.gif')}}"
       class="d-block w-100" alt="..."> <div class="carousel-caption d-none
       d-md-block"> <h5>ES UN MUNDO GRANDE, VE Y DISFRUTALO</h5> <p
       id="CON">CONVERSE</p> </div> </div> <div class="carousel-item"> <img
       src="{{asset('Images/giphyfluor1.gif')}}" class="d-block w-100"
       alt="..."> <div class="carousel-caption d-none d-md-block"> <h5>NADA ES
       IMPOSIBLE</h5> <p>ADIDAS</p> </div> </div> </div> <a
       class="carousel-control-prev" href="#carouselExampleCaptions"
       role="button" data-slide="prev"> <span class="carousel-control-prev-icon"
       aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a
       class="carousel-control-next" href="#carouselExampleCaptions"
       role="button" data-slide="next"> <span class="carousel-control-next-icon"
       aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
       </div>






 <!-- tarjetas -->

 <div class="container tarjetas"> <div class="row"> <div class="col-md-4">
 <figure class="card card-product"> <div class="img-wrap"><a
 href="producto.php"><img href="producto.php"
 src="{{asset('images/nikelogo.jpg')}}"></a></div> <figcaption
 class="info-wrap"> <h4 class="title">NIKE</h4> <p class="desc">Vea aquí los
 ultimos modelos</p> <div class="rating-wrap"> <div class="label-rating">132
 reviews</div> <div class="label-rating">154 orders </div> </div> </figcaption>
 </figure> </div> <div class="col-md-4"> <figure class="card card-product"> <div
 class="img-wrap"><a href="producto-adidas.php"><img href="producto.php"
 src="{{asset('images/adidaslogo.jpg')}}"></a></div> <figcaption
 class="info-wrap"> <h4 class="title">ADIDAS</h4> <p class="desc">Todos los
 talles y colores.</p> <div class="rating-wrap"> <div class="label-rating">132
 reviews</div> <div class="label-rating">154 orders </div> </div> </figcaption>

          </figure>
        </div>
        <div class="col-md-4">
          <figure class="card card-product">
            <div class="img-wrap"><a href="producto-vans.php"><img href="producto.php" src="{{asset('images/vans-logo.png')}}"></a></div>
            <figcaption class="info-wrap">
              <h4 class="title">VANS</h4>
              <p class="desc">El calzado estrella.</p>
              <div class="rating-wrap">
                <div class="label-rating">132 reviews</div>
                <div class="label-rating">154 orders </div>
              </div>
            </figcaption>


            </div>
          </figure>
        </div>
      </div>
    </div>

 @endsection
