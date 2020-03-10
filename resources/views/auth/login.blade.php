@extends('layout.main')
@section('link') <link rel="stylesheet" href="{{asset ('css/login.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('content')

  <main>
    <div id="Todo2">
    <div id="Todo">
<h1>Iniciar Sesion</h1>
<form method="POST" action="{{route('login')}}">
  {{csrf_field()}}
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
         {!! $errors->first('email',':message')!!}
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
        {!! $errors->first('password',':message')!!}
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="gridCheck">Recordar mi usuario</label>
        </div>
    </div>
    <button type="submit" class="btn btn-danger">Ingresar</button>
    @if (Route::has('password.request'))
       <a class="btn btn-dark" href="{{ route('password.request') }}">
        Olvidaste tu contraseña?
     </a>
     @endif
</form>
<small>
    <a href="formularioRegistro" id="nuevo" >Nuevo aqui? Registrate!</a>
</small>
</main>
</div></div>
@endsection
