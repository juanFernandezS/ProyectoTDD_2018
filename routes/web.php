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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){

    //rutas de mantenedores
    Route::prefix('mantenedores')->group(function (){

        Route::resource('categorias','CategoriasController');

        Route::resource('articulos','Admin\ArticuloController');

        Route::resource('caracteristicas','Admin\CaracteristicaController');

    });
    //aqui para abajo van las rutas externas a los cruds

    Route::get('/detalle/{id}','HomeController@detalle')->name('detalle');
    Route::get('/publicaciones/lista','HomeController@publicaciones')->name('publicaciones');
    Route::get('/publicaciones/lista/categoria/{id}','HomeController@publicacionesFiltro')->name('publicacionesFiltro');
    Route::get('/publicaciones/lista/articulo/{id}','HomeController@publicacionesFiltroArticulo')->name('publicacionesFiltroArticulo');

    Route::post('/listarCaracteristicas/{id}','HomeController@listarCaracteristicas')->name('listarCaracteristicas');

    Route::resource('publicaciones', 'PublicacionesController');

    //confirmacion de la compra
    Route::get('compra/conf-comprador/{id_compra}/{id_usuario}','CompraController@confirmacionComprador')->name('confirmacionComprador');
    Route::get('compra/conf-vendedor/{id_compra}/{id_usuario}','CompraController@confirmacionVendedor')->name('confirmacionVendedor');

    //chats
    Route::get('/chat/{id_user}/{id_publicacion}','ChatsController@nuevoChat')->name('nuevoChat');
    Route::get('/chats/{id_compra}','ChatsController@chats')->name('chats');
    //lista de chats disponibles del usuario
    Route::get('/intereses/{id_usuario}','ChatsController@intereses')->name('intereses');
    Route::get('mensajes/{id_user}/{id_public}','ChatsController@verChat')->name('mensajes');
    //Route::post('mensaje-nuevo','ChatsController@mensajeNuevo');
    Route::resource('chat','ChatsController');


});
