 <!-- NAV -->

 <div>
   <a href="/Contacto" id="aa"> Contactanos</a>
   <nav class=" navbar navbar-expand-lg navbar-light" id="inicio">
     <h4 class=" mr-3 text-uppercase font-weight-bold"><a href="/" style="color: black;text-decoration: none;">CASBUSAGI</a> </h4>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <input type="hidden" name="idMarca">
     <input type="hidden" name="idCat">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Adulto
          </a>
           <div class="dropdown-menu">
             <a class="dropdown-item" href="/Productos/VANS">VANS</a>
             <a class="dropdown-item" href="/Productos/NIKE">NIKE</a>
             <a class="dropdown-item" href="/Productos/ADIDAS">ADIDAS</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="todos-productos.php">TODAS</a>
           </div>
         </li>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

               Niños
             </a>
             <div class="dropdown-menu">
               <a class="dropdown-item" href="#1">VANS</a>
               <a class="dropdown-item" href="#2">NIKE</a>
               <a class="dropdown-item" href="#3">ADIDAS</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="todos-productos.php">TODAS</a>
             </div>
           </li>
       </ul>
       <div style="padding=5%">
         <div class="widgets-wrap float-md-right">
           <div class="widget-header  mr-3">
             <a href="carrito.php" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
             <span class=" badge-pill badge-danger notify">0</span>
           </div>
           @guest

           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav ml-auto">
               <a class=" mr-2" id="sesion" href="login" role="button">Iniciar Sesión</a>
               @if (Route::has('register'))
               <a class="  mr-2" style="padding-left: 2%;" id="sesion" href="register" role="button">Registrarme</a>
             </div>
           </div> @endif
           @else
           <div class="widget-header  mr-3">
             <a href="{{route('Perfil')}}"><img src="/storage/{{Auth::user()->avatar}}" class="mr-3 icon icon-sm rounded-circle border"></a>
           </div>
           <div class="widget-header icontext">
             <div class="widget-header icontext">
             </div>
             <lu class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->alias }} <span class="caret"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{route('Perfil')}}">
                   {{ __('Mi Perfil') }}
                 </a>
                 <a class="dropdown-item" href="" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                   {{ __('Salir') }}
                 </a>
                 @if (Auth::user()->role=='admin')
                 <a class="dropdown-item" href="{{route('productos')}}">
                 {{ ('Panel Administrativo') }} </a>
                @endif
                 <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                   @csrf
                 </form>
               </div>
             </lu>
             @endguest
   </nav>
 </div>
