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
Route::get('/adminMarcas', 'MarcasController@index')->middleware('Admin');
Route::get('/formAgregarMarca', 'MarcasController@create')->middleware('Admin');
Route::get('/formModificarMarca/{id}', 'MarcasController@edit')->middleware('Admin');
Route::post('/agregarMarca', 'MarcasController@store')->middleware('Admin');
Route::post('/modificarMarca', 'MarcasController@update')->middleware('Admin');
Route::post('/eliminarMarca', 'MarcasController@destroy')->middleware('Admin');


############## CRUD CATEGORIAS ###################
Route::get('/adminCategorias', 'CategoriasController@index')->middleware('Admin');
Route::get('/formAgregarCategoria', 'CategoriasController@create')->middleware('Admin');
Route::get('/formModificarCategoria/{id}', 'CategoriasController@edit')->middleware('Admin');
Route::post('/agregarCategoria', 'CategoriasController@store')->middleware('Admin');
Route::post('/modificarCategoria', 'CategoriasController@update')->middleware('Admin');
Route::post('/eliminarCategoria', 'CategoriasController@destroy')->middleware('Admin');

############## CRUD PRODUCTOS ###################
Route::get('/adminProductos', 'ProductosController@index')->name('productos')->middleware('Admin');
Route::get('/formAgregarProducto', 'ProductosController@create')->middleware('Admin');
Route::get('/formModificarProducto/{id}', 'ProductosController@edit')->middleware('Admin');
Route::post('/agregarProducto', 'ProductosController@store')->middleware('Admin');
Route::post('/modificarProducto', 'ProductosController@update')->middleware('Admin');
Route::post('/eliminarProducto', 'ProductosController@destroy')->middleware('Admin');

############## VISTA PRODUCTOS ###################

Route::get('/Productos/{marca}/{categoria?}', 'ProductosController@show');
Route::get('/Producto/{id}', 'ProductosController@perfilProducto')->name('Producto');
Route::get('/Productos', 'ProductosController@search');

/*USER*/
Auth::routes();

Route::get('/Perfil', 'indexController@Perfil')->name('Perfil')->Middleware('auth');
Route::get('/bienvenidos', function (){
    return view('/Users/pagRegistro');})->name('bienvenidos')-> Middleware('auth');

Route::get('/Contacto', 'indexController@Contacto')->name('Contacto');
Route::get('/Carrito', 'carritoController@index')->name('carrito');;
Route::get('/FAQ', 'indexController@faq')->name('FAQ');

//Route::get('/prueba', function(){
    //return view('/Productos/Product');});
