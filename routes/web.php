<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'PedidoController@home')->name('pedidos.home');


Route::get('/pedidos', 'PedidoController@index')->name('pedidos.index');
Route::get('/pedidos/create', 'PedidoController@create')->name('pedidos.create');
Route::post('/pedidos', 'PedidoController@store')->name('pedidos.store');
Route::get('/pedidos/{pedido}', 'PedidoController@show')->name('pedidos.show');
Route::get('/pedidos/{pedido}/edit', 'PedidoController@edit')->name('pedidos.edit');
Route::put('/pedidos/{pedido}', 'PedidoController@update')->name('pedidos.update');
Route::delete('/pedidos/{pedido}', 'PedidoController@destroy')->name('pedidos.destroy');

Auth::routes();

