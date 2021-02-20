<?php

use Illuminate\Support\Facades\Route;

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
});



Route::get('/zapatos', 'ZapatosController@index')->name('zapatos.index');
Route::get('/zapatos/create', 'ZapatosController@create')->name('zapatos.create');
Route::post('/zapatos', 'ZapatosController@store')->name('zapatos.store');
Route::get('/zapatos/{pedido}', 'ZapatosController@show')->name('zapatos.show');
Route::get('/zapatos/{pedido}/edit', 'ZapatosController@edit')->name('zapatos.edit');
Route::put('/zapatos/{pedido}', 'ZapatosController@update')->name('zapatos.update');

Auth::routes();

