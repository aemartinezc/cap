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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'HomeController@perfil')->name('perfil');
Route::get('/cursos', 'HomeController@cursos')->name('e.cursos');
Route::get('/manager', 'HomeController@manager')->name('e.manager');
Route::get('/usuarios', 'HomeController@usuarios')->name('e.usuarios');
Route::get('/roles', 'HomeController@roles')->name('e.roles');
Route::get('/dependencias', 'HomeController@dependencias')->name('e.dependencias');
Route::get('/categorias', 'HomeController@categorias')->name('e.categorias');
