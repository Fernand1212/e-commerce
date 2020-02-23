@extends('layout.main')
@section('css') <link rel="stylesheet" href="{{asset ('css/formularioRegistro.css')}}">
@endsection
@section('content')
<div id="Todo">

    <form method="post"  action="pag registro.php"  enctype="multipart/form-data">
      <div id="titulo">Crear Cuenta</div>
      <div class="form-row">
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Nombre</label>
          <input type="text" name="nombre" class="form-control" id="validationDefault01" placeholder="Nombre" value="">
          <small></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault02">Apellido</label>
          <input type="text" name="apellido" class="form-control" id="validationDefault02" placeholder="Apellido" value="">
          <small></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault01">Email</label>
          <input type="email" name="email" class="form-control" id="validationDefault01" placeholder="Email" value="">
          <small></small>
        </div>

        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Contraseña</label>
          <input type="password" name="password" class="form-control" id="validationDefault01" placeholder="Contraseña" value="">
          <small></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefaultUsername">Repetir Contraseña</label>
          <input type="password" name="repassword" class="form-control" id="validationDefaultUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend2" value="">
          <small></small>

        </div>
      </div>

      <div class="form-row">
        <!-- <div class="form-row"> -->
        <div class="col-md-2 mb-3">
          <label for="pais">Pais </label>
          <select name="pais" id="country_id" class="form-control select2 select2-hidden-accessible" data-select2-id="country_id" tabindex="-1" aria-hidden="true">
            <option selected="selected" value="ARGENTINA" data-select2-id="12">ARGENTINA</option>



          </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="245" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_id-container"><span class="select2-selection__rendered" id="select2-country_id-container" role="textbox" aria-readonly="true" title="PHILIPPINES"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
        </div>

        <div class="col-md-2 mb-3">
          <label for="validationDefault03">Ciudad</label>
          <input type="text" class="form-control" id="validationDefault03" placeholder="Ciudad" name="ciudad" value="">
          <small></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault04">Barrio</label>
          <input type="text" class="form-control" id="validationDefault04" placeholder="Barrio" name="barrio" value="">
          <small></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault05">Codigo Postal</label>
          <input type="number" min="1000" max="9999" class="form-control" id="validationDefault05" placeholder="Codigo Postal" name="postal" value="">
          <small></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Calle - Altura</label>
          <input type="text" name="calle" class="form-control" id="validationDefault01" placeholder="calle" value="">
          <small></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault05">Año de Nacimiento</label>
          <input type="number" min="1950" max="2019" class="form-control" id="validationDefault05" placeholder="2000" name="nacimiento" value="">
          <small></small>
        </div>
        <div class="col-md-2 mb-3">
          <label for="validationDefault01">Alias</label>
          <input type="text" name="alias" class="form-control" id="validationDefault01" placeholder="Alias" value="">
          <small></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault01">Teléfono</label>
          <input type="number"  name="telefono" class="form-control" id="validationDefault01" placeholder="Teléfono" value="">
          <small></small>
        </div>
        <div class="col-md-3 mb-3">
          <label for="avatar">Avatar</label>
          <input type="file" name="avatar" class="" id="avatar" placeholder="" value="">
          <small></small>
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
@endsection
