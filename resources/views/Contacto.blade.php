@extends('layout.main')
@section('content')
@section('link')<link rel="stylesheet" href="{{asset('/css/Contacto.css')}}">@endsection
@section('title')CONTACTO @endsection

  <div id="Todo2">

    <div id="Todo">

      <form>
        <b>
          <h1>Envianos tu Mensaje</h1>
        </b>
        <div class="form-group">
          <label for="exampleInputPassword1">Tu Nombre</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tu Nombre" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Dirrecion de Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dirrecion de Email" required>
          <small>No Compartiremos tu Dirrecion de Email </small>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Tu Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
        <button id="hola" type="submit" class="btn btn-secondary btn-lg btn-block">Enviar</button>
      </form>

    </div>
  </div>
  </div>
  </div>
  </div>
  @endsection
