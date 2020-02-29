<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

public function showLoginForm(){
  return view('auth.login');
}

public function __construct()
{
    $this->middleware('guest')->except('logout');
}

  public function Login(){

      $reglas = [
      'email'    => 'email|required|string',
      'password' => 'required|string|min:6'
    ];
    $mensajes = [
      'email'    => 'Por favor vuelva a intentarlo',
      'required' => 'El campo :attribute es obligatorio',
      'min'      => 'La contraseña debe tener al menos :min caracteres'
      ];



  $datosUsuario =  $this->validate(request(),$reglas, $mensajes);
if(Auth::attempt($datosUsuario)){
  return redirect()->route('index');
} else {
  return back()->withErrors(['email' => 'El email no se encuentra registrado'])
  ->withInput(request(['email']));
}

  }

  public function logout(){
  Auth::logout();
  return redirect('/');
  }


   }
