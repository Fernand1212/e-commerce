@extends('layout.main')
@section('link')
<link rel="stylesheet" href="{{asset ('css/pagRegistro.css')}}">
@endsection
@section('content')
<div class="mx-5">
<div class="jumbotron" style=" background-color:rgba(0, 0, 0, 0.795);" >
  <h1 class="display-4">Cuenta creada exitosamente!</h1>
  <h2> Bienvenido {{auth()->user()->name}} </h2>
  <hr class="my-4">
   <a class="btn btn-danger lg" id="Boton" href="usuario.php" role="button">Mi Usuario</a>
  <br><br>
  <a class="btn btn-danger lg" id="Boton" href="/" role="button">Explorar</a>
</div></div>
@endsection