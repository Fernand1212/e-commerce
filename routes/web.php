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

use App\Http\Controllers\ProductosController;

Route::get('/','indexController@home')->name('index');



############## CRUD MARCAS ###################
Route::get('/adminMarcas', 'MarcasController@index');
Route::get('/formAgregarMarca', 'MarcasController@create');
Route::get('/formModificarMarca/{id}', 'MarcasController@edit');
Route::post('/agregarMarca', 'MarcasController@store');
Route::post('/modificarMarca', 'MarcasController@update');
Route::post('/eliminarMarca', 'MarcasController@destroy');


############## CRUD CATEGORIAS ###################
Route::get('/adminCategorias', 'CategoriasController@index');
Route::get('/formAgregarCategoria', 'CategoriasController@create');
Route::get('/formModificarCategoria/{id}', 'CategoriasController@edit');
Route::post('/agregarCategoria', 'CategoriasController@store');
Route::post('/modificarCategoria', 'CategoriasController@update');
Route::post('/eliminarCategoria', 'CategoriasController@destroy');

############## CRUD PRODUCTOS ###################
Route::get('/adminProductos', 'ProductosController@index');
Route::get('/formAgregarProducto', 'ProductosController@create');
Route::get('/formModificarProducto/{id}', 'ProductosController@edit');
Route::post('/agregarProducto', 'ProductosController@store');
Route::post('/modificarProducto', 'ProductosController@update');
Route::post('/eliminarProducto', 'ProductosController@destroy');

############## VISTA PRODUCTOS ###################

Route::get('/Productos/{marca?}', 'ProductosController@show');

/*USER*/
Auth::routes();

Route::get('/Perfil', 'indexController@Perfil')->name('Perfil');
Route::get('/bienvenidos', function (){
    return view('/Users/pagRegistro');});
