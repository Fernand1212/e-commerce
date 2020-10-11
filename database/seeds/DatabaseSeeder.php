<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       #users
        DB::table('users')->insert([
          'name'=> 'prueba',
          'email' => 'prueba@prueba.com',
          'password' => 'prueba',
          'apellido'  => 'pruebita',
          'pais'     => 'Argentina',
          'ciudad'     => 'GregoriodelaFerrere',
          'barrio'   => 'La Boca',
          'postal'   => '1714',
          'direccion'    => 'calle falsa 123',
          'nacimiento' => 10/20/1980,
          'alias'     => 'laPruebita',
          'telefono'  => '12345678910',
          'avatar' => 'public/images/foto.jpg',
          

        ]);
    }
}
