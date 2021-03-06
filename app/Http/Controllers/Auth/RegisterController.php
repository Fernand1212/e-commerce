<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/bienvenidos';

    public function showRegistrationForm()
    {
        return view('auth/register');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'apellido' => ['required', 'string', 'max:255', 'min:3'],
            'ciudad'    =>['required', 'string', 'max:255', 'min:4'],
            'barrio'  => ['required', 'string', 'max:255', 'min:3'],
            'postal'  => ['required', 'numeric'],
            'direccion'   => ['required', 'string', 'max:255', 'min:6'],
            'nacimiento' => ['required', 'numeric'],
            'alias'      => ['required', 'string', 'max:255', 'min:6'],
            'telefono'   => ['required', 'numeric']


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = app('request');
        if($request->hasfile('avatar')){
            $avatar = $request->file('avatar')->store('public');
            $nombreImagen = basename($avatar);


        }

        return  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'apellido'  => $data['apellido'],
            'pais'     => $data['pais'],
            'ciudad'     => $data['ciudad'],
            'barrio'   => $data['barrio'],
            'postal'   => $data['postal'],
            'direccion'    => $data['direccion'],
            'nacimiento' => $data['nacimiento'],
            'alias'     => $data['alias'],
            'telefono'  => $data['telefono'],
            'avatar'  => $nombreImagen
        ]);

}
        public function Bienvenido(){
          return view('users/pagRegistro');
        }



}
