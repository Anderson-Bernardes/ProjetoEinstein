<?php
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/configuracoes', ['uses' => 'ConfigController@index'])->name('config');
Route::get('/PerfilUsuario', 'UserController@index')->name('userPerfil');
Route::get('/Grupos', 'GrupoController@index')->name('grupos');
Route::get('/amigos', 'AmigosController@index')->name('amigos');
Route::post('/criacao', 'GrupoController@store')->name('criaGrupo');
Route::post('/fotoperfil', 'UserController@updateFotoUsario')->name('updateFotoUser');
Route::post('/dadosUsuario', 'UserController@updateDadosUser')->name('updateDadosUser');
Route::post('/removeAmigo', 'AmigosController@remove')->name('removeAmigo');
Route::post('/post', 'PostsController@store')->name('criaPost');

Route::get('/admin/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to("/login")
        ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
})->name('logout');

