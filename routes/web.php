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

    Route::resource('publicaciones', 'PublicacionesController');

});
