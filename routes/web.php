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

Route::get('/','indexController@home')->name('index');



############## CRUD MARCAS ###################
Route::get('/adminMarcas', 'MarcasController@index');
Route::get('/formAgregarMarca', 'MarcasController@create');
Route::get('/formModificarMarca/{id}', 'MarcasController@edit');
Route::post('/agregarMarca', 'MarcasController@store');
Route::post('/modificarMarca', 'MarcasController@update');
Route::post('/eliminarMarca', 'MarcasController@destroy');


############## CRUD PRODUCTOS ###################
Route::get('/adminProductos', 'ProductosController@index');
Route::get('/formAgregarProducto', 'ProductosController@create');
Route::get('/formModificarProducto/{id}', 'ProductosController@edit');
Route::post('/agregarProducto', 'ProductosController@store');
Route::post('/modificarProducto', 'ProductosController@update');

############## CRUD CATEGORIAS ###################
Route::get('/adminCategorias', 'CategoriasController@index');
Route::get('/formAgregarCategoria', 'CategoriasController@create');
Route::post('/agregarCategoria', 'CategoriasController@store');

/*USER*/
Auth::routes();

Route::get('/Perfil', 'indexController@Perfil')->name('Perfil');
Route::get('/Bienvenido','Auth\RegisterController@Bienvenido')->name('Bienvenido');
