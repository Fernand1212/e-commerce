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


############## CRUD Marcas ###################
Route::get('/Marcas/adminMarcas', 'MarcasController@index')->name('adminMarcas');
Route::get('/Marcas/formAgregarMarca', 'MarcasController@create')->name('formAgregarMarca');
Route::post('/Marcas/agregarMarca', 'MarcasController@store');
Route::get('/Marcas/formModificarMarca/{id}', 'MarcasController@edit');
Route::post('/Marcas/modificarMarca', 'MarcasController@update');

############## CRUD PRODUCTOS ###################
Route::get('/adminProductos', 'ProductosController@index');
Route::get('/formAgregarProducto', 'ProductosController@create');

//Route::view('/adminCategorias', 'adminCategorias');
Route::get('/adminCategorias', 'CategoriasController@index');
Route::get('/formAgregarCategoria', 'CategoriasController@create');
Route::post('/agregarCategoria', 'CategoriasController@store');

/*Login*/

Auth::routes();
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
