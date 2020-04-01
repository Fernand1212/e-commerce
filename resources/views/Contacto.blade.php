@extends('layout.main')
@section('content')
@section('link')
<link rel="stylesheet" href="{{asset('/css/Contacto.css')}}">@endsection
@section('title')CONTACTO @endsection

  <div id="Todo2">

    <div id="Todo">

      <form  id="form">
        <b>
          <h1>Envianos tu Mensaje</h1>
        </b>
        <div class="form-group">
          <label for="Nombre">Tu Nombre</label>
          <input type="text" class="form-control" id="Nombre" placeholder="Tu Nombre">
        </div>
        <div class="form-group">
          <label for="mail">Dirrecion de Email</label>
          <input type="email" class="form-control" id="mail"  placeholder="Dirrecion de Email">
          <small>No Compartiremos tu Dirrecion de Email </small>
        </div>

        <div class="form-group">
          <label for="">Tu Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
        <button id="hola" type="submit" class="btn btn-secondary btn-lg btn-block" onclick="return  Validacion();">Enviar</button>
      </form>
<div id="error"></div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <script src="js/cont.js" charset="utf-8"></script>
  @endsection
