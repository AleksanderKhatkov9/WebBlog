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

Route::get('/', "App\Http\Controllers\NewsController@index");
Route::get('/add', "App\Http\Controllers\NewsController@store");
Route::post('/news/save', "App\Http\Controllers\NewsController@create");
Route::get('/article', "App\Http\Controllers\NewsController@article")->name('post');
Route::post('/news/update/{id}', "App\Http\Controllers\NewsController@update");
Route::post('/news/delete', "App\Http\Controllers\NewsController@destroy");
Route::post('/news/comment', "App\Http\Controllers\CommentsController@save");
Route::get('/room', "App\Http\Controllers\NewsController@start");
Route::get('/search', "App\Http\Controllers\NewsController@search")->name('search');
Route::get('/test', "App\Http\Controllers\NewsController@runTemplate");

Route::get('/room', "App\Http\Controllers\UserController@index");
Route::post('/users/save', "App\Http\Controllers\UserController@create");
Route::get('/edit', "App\Http\Controllers\UserController@edit");
Route::post('/users/update', "App\Http\Controllers\UserController@update");
Route::post('/users/delete', "App\Http\Controllers\UserController@destroy");

