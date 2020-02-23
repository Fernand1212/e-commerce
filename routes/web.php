<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/layout/index');
});

############## CRUD Marcas ###################
Route::get('/adminMarcas', 'MarcasController@index');
Route::get('/formAgregarMarca', 'MarcasController@create');
Route::post('/agregarMarca', 'MarcasController@store');
Route::get('/formModificarMarca/{id}', 'MarcasController@edit');
Route::post('/modificarMarca', 'MarcasController@update');

############## CRUD PRODUCTOS ###################
Route::get('/adminProductos', 'ProductosController@index');
Route::get('/formAgregarProducto', 'ProductosController@create');

//Route::view('/adminCategorias', 'adminCategorias');
Route::get('/adminCategorias', 'CategoriasController@index');
Route::get('/formAgregarCategoria', 'CategoriasController@create');
Route::post('/agregarCategoria', 'CategoriasController@store');

/* Registrar Usuario */
Route::get('/formularioRegistro', function (){
    return view('formularioRegistro');
});