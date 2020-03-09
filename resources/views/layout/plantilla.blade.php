<!doctype html>
<html lang="en">
<head>
@include('includes.head')
    <title>@yield('title')</title>
</head>
<body>
    <header>

        <nav class="site-header sticky-top py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">

                <a class="py-2 d-md-inline-block" href='/'>Inicio</a>
                <a class="py-2 d-md-inline-block" href="/adminMarcas">Admin Marcas</a>
                <a class="py-2 d-md-inline-block" href="/adminCategorias">Admin Categorías</a>
                <a class="py-2 d-md-inline-block" href="/adminProductos">Admin Productos</a>
                <a class="py-2 d-md-inline-block" href='/Contacto'>Contacto</a>
            </div>
        </nav>

    </header>

    <main class="container">
        <h1>@yield('h1')</h1>

        @yield('main')

    </main>


    <footer class="footer">
        <div class="inner">
            @include('includes.footer')
        </div>
    </footer>
    </div>


</body>
</html>
