<?php
$marcas = session('marcas');
$categorias = session('categorias');
?>
 <!-- NAV -->
 <div class="grid">
   <a href="/Contacto" id="aa"> Contactanos</a>
   <nav class="navbar navbar-expand-lg navbar-light" id="inicio">
     <h4 class=" mr-3 text-uppercase font-weight-bold"><a href="/" style="color: black;text-decoration: none;">CASBUSAGI</a> </h4>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          @foreach($categorias as $categoria)
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{$categoria->catNombre}}
           </a>
           <div class="dropdown-menu">
             @foreach ($marcas as $marca)
             <a class="dropdown-item" href="/Productos/{{$marca->idMarca}}/{{$categoria->idCategoria}}">{{$marca->mkNombre}}</a>
             @endforeach
             @endforeach
             </li>

         </ul>
         <form class="form-inline " action="/Productos" method="GET">
      <input class="form-control mr-sm-2" type="text"   id="search" name="search" placeholder="¿Que buscas?">

      <button class="btn btn-outline-danger my-2 my-sm-0"  type="submit" >Buscar</button>

    </form>

        <div class="widgets-wrap mr-1">
          <div class="widget-header  mr-1">
            <a href="/Carrito" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
            {{-- <span class=" badge-pill badge-danger notify">0</span> --}}
          </div>
        </div>
           @guest

           <div class="navbar-nav" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class=" mr-2" id="sesion" href="{{route('login')}}" role="button">Iniciar Sesión</a>
              @if (Route::has('register'))
              <a class="  mr-2" id="sesion" href="{{route('register')}}" role="button">Registrarme</a>
            </div>
          </div> @endif
           @else
           <div class="widget-header  row" >
             <a href="{{route('Perfil')}}"><img src="/storage/{{Auth::user()->avatar}}" class="mr-3 icon icon-sm rounded-circle border"></a>
           </div>

           <div class="widget-header icontext">
             <div class="widget-header icontext">
             </div>
             <ul class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->alias }} <span class="caret"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('Perfil')}}">
  {{ __('Mi Perfil') }}
</a>
  @if (Auth::user()->role=='admin')
  <a class="dropdown-item" href="{{route('productos')}}">
  {{ ('Panel Administrador') }} </a>
  @endif

<a class="dropdown-item" href="" onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
  {{ __('Salir') }}
</a>
<form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                   @csrf
                 </form>
               </div>
              </ul>
             @endguest

 </div>
</div></div></nav></div></div>
