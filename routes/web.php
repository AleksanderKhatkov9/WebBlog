<?php

use Illuminate\Support\Facades\Route;
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

/** Router News */
//Route::get('/', "App\Http\Controllers\NewsController@index");
Route::get('/add', "App\Http\Controllers\NewsController@store");
Route::post('/news/save', "App\Http\Controllers\NewsController@create");
Route::get('/article', "App\Http\Controllers\NewsController@article")->name('post');
Route::post('/news/update/{id}', "App\Http\Controllers\NewsController@update");
Route::get('/news/delete', "App\Http\Controllers\NewsController@destroy");
Route::post('/news/comment', "App\Http\Controllers\CommentsController@create");

Route::get('/news/index', "App\Http\Controllers\CommentsController@index");

Route::get('/search', "App\Http\Controllers\NewsController@search")->name('search');
Route::get('/test', "App\Http\Controllers\NewsController@runTemplate");


/** Router User */
Route::get('/room', "App\Http\Controllers\UserController@index");
Route::post('/users/save', "App\Http\Controllers\UserController@create");
Route::get('/edit', "App\Http\Controllers\UserController@edit");
Route::post('/users/update', "App\Http\Controllers\UserController@update");
Route::post('/users/delete', "App\Http\Controllers\UserController@destroy");
Route::get('/admin', "App\Http\Controllers\AdminController@index");


/** Rote autorization  */

Auth::routes();
Route::get('/', "App\Http\Controllers\HomeController@index");

// маршруты аутентификации
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// маршруты регистрации
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');






