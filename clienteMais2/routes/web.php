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



Route::get('/', ['uses' => 'App\Http\Controllers\HomeController@index', 'as'=>'home']);
Route::get('/home', ['uses' => 'App\Http\Controllers\ClienteController@index', 'as'=>'cliente.index']);
Route::get('/cliente', ['uses' => 'App\Http\Controllers\ClienteController@index', 'as'=>'cliente.index']);
Auth::routes();

Route::get('cliente/adicionar', ['uses' => 'App\Http\Controllers\ClienteController@adicionar', 'as'=>'cliente.adicionar']);
Route::post('cliente/salvar', ['uses' => 'App\Http\Controllers\ClienteController@salvar', 'as'=>'cliente.salvar']);
Route::get('cliente/editar/{id}', ['uses' => 'App\Http\Controllers\ClienteController@editar', 'as'=>'cliente.editar']);
Route::put('cliente/atualizar/{id}', ['uses' => 'App\Http\Controllers\ClienteController@atualizar', 'as'=>'cliente.atualizar']);

Route::get('cliente/deletar/{id}', ['uses' => 'App\Http\Controllers\ClienteController@deletar', 'as'=>'cliente.deletar']);

Route::get('cliente/detalhe/{id}',['uses' => 'App\Http\Controllers\ClienteController@detalhe', 'as' =>'cliente.detalhe']);

Route::get('telefone/adicionar/{id}',['uses'=>'App\Http\Controllers\TelefoneController@adicionar', 'as' =>'telefone.adicionar']);

Route::post('telefone/salvar/{id}',['uses'=>'App\Http\Controllers\TelefoneController@salvar', 'as' =>'telefone.salvar']);

Route::get('telefone/editar/{id}', ['uses' => 'App\Http\Controllers\TelefoneController@editar', 'as'=>'telefone.editar']);
Route::put('telefone/atualizar/{id}', ['uses' => 'App\Http\Controllers\TelefoneController@atualizar', 'as'=>'telefone.atualizar']);

Route::get('telefone/deletar/{id}', ['uses' => 'App\Http\Controllers\TelefoneController@deletar', 'as'=>'telefone.deletar']);
