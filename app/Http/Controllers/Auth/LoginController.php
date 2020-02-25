<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
  public function Login(){

      $reglas = [
      'email'    => 'email|required|string|unique:users,email',
      'password' => 'required|string|min:6'
    ];
    $mensajes = [
      'email'    => 'Por favor vuelva a intentarlo',
      'required' => 'El campo :attribute es obligatorio',
      'unique'   => 'Email ya registrado',
      'min'      => 'La contraseña debe tener al menos :min caracteres'
      ];



  $datosUsuario =  $this->validate(request(),$reglas, $mensajes);
if(Auth::attempt($datosUsuario)){
  return "ok";
} else {
  return back()->withErrors(['email' => 'El email no se encuentra registrado'])
  ->withInput(request(['email']));
}

  }
   }
