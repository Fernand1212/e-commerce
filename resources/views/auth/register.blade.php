@extends('layout.main')
@section('link') <link rel="stylesheet" href="{{asset ('css/formularioRegistro.css')}}">
@endsection
@section('content')
<div id="Todo">

    <form method="post" id="registro" action="{{ route('register') }}"  enctype="multipart/form-data">
    @csrf
      <div id="titulo">Crear Cuenta</div>
      <div class="form-row">
        <div class="col-md-2 mb-3">
          <label for="name">Nombre</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre" value="{{ old('name') }}">
           @error('name')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-2 mb-3">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" id="apellido" placeholder="Apellido" value="{{ old('apellido') }}">
           @error('apellido')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-3 mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}">
           @error('email')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>

        <div class="col-md-2 mb-3">
          <label for="password">Contraseña</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" value="">
           @error('password')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-2 mb-3">
          <label for="password_confirmation">Repetir Contraseña</label>
          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Contraseña" aria-describedby="inputGroupPrepend2" value="">


        </div>
      </div>

      <div class="form-row">
        <div class="col-md-2 mb-3">
          <label for="pais">Pais </label>
          <select name="pais" id="country_id" class="form-control @error('pais') is-invalid @enderror select2 select2-hidden-accessible" data-select2-id="country_id" tabindex="-1" aria-hidden="true">




          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="245" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_id-container"><span class="select2-selection__rendered" id="select2-country_id-container" role="textbox" aria-readonly="true" title="PHILIPPINES"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>

        <div class="col-md-2 mb-3">
          <label for="ciudad">Ciudad</label>
          <input type="text" class="form-control @error('ciudad') is-invalid @enderror" id="ciudad" placeholder="Ciudad" name="ciudad" value="{{ old('ciudad') }}">
           @error('ciudad')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-3 mb-3">
          <label for="barrio">Barrio</label>
          <input type="text" class="form-control @error('barrio') is-invalid @enderror" id="barrio" placeholder="Barrio" name="barrio" value="{{ old('barrio') }}">
           @error('barrio')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-2 mb-3">
          <label for="postal">Codigo Postal</label>
          <input type="number" min="1000" max="9999" class="form-control @error('postal') is-invalid @enderror" id="postal" placeholder="Codigo Postal" name="postal" value="{{ old('postal') }}">
           @error('postal')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-2 mb-3">
          <label for="direccion">Calle - Altura</label>
          <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" id="direccion" placeholder="direccion" value="{{ old('direccion') }}">
           @error('direccion')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-2 mb-3">
          <label for="nacimiento">Año de Nacimiento</label>
          <input type="number" min="1950" max="2019" class="form-control @error('nacimiento') is-invalid @enderror" id="nacimiento" placeholder="2000" name="nacimiento" value="{{ old('nacimiento') }}">
           @error('nacimiento')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-2 mb-3">
          <label for="alias">Alias</label>
          <input type="text" name="alias" class="form-control @error('alias') is-invalid @enderror" id="alias" placeholder="Alias" value="{{ old('alias') }}">
           @error('alias')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-3 mb-3">
          <label for="telefono">Teléfono</label>
          <input type="number"  name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Teléfono" value="{{ old('telefono') }}">
           @error('telefono')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="col-md-3 mb-3">
          <label for="avatar">Avatar</label>
          <input type="file" name="avatar" class="" id="avatar" placeholder="Avatar" value="">
           @error('Avatar')
           <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
             </span>
         @enderror
        </div>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="customSwitch1" require>
          <label class="custom-control-label" for="customSwitch1" require>Tengo más de 18 años</label>
        </div>


      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
          <label class="form-check-label" for="invalidCheck2" required>
            He Leido y acepto Terminos y Condiciones
          </label>
        </div>
        <a href="terminos.html" id="Terminos" style="margin: 1%;">Terminos y Condiciones</a>





      </div>


      <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Revisa la informacion antes de Enviar">
        Enviar
      </button>
  </div>
  </form>
  </div>


  </div>
  <script src="js/register.js" charset="utf-8"></script>
@endsection
