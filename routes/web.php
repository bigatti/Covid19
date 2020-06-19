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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detalhes_estado', 'HomeController@detalhes_estado')->name('home.detalhes_estado');
Route::get('/como_proteger', 'HomeController@como_proteger')->name('home.como_proteger');
Route::get('/como_se_proteger', 'HomeController@como_se_proteger')->name('home.como_se_proteger');
Route::get('/fazer_mascara', 'HomeController@fazer_mascara')->name('home.fazer_mascara');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

