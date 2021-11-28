<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//Rota da minha view que mostra os registros dos usuárioss
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->middleware('auth');

//Rota pra cadastrar um novo usuário
Route::get('/usuarios/new', 'UsuariosController@new')->middleware('auth');

//Rota de adicionar um usuário
Route::post('/usuarios/add', 'UsuariosController@add')->middleware('auth');

//Rota para editar um usuário
Route::get('usuarios/{id}/edit', 'UsuariosController@edit')->middleware('auth');
Route::post('usuarios/update/{id}', 'UsuariosController@update')->middleware('auth');

//Rota para deletar um usuário
Route::delete('usuarios/delete/{id}', 'UsuariosController@delete')->middleware('auth');
