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

Route::get('/', 'CommentController@index');
// Route::get('comment', 'CommentController@index');
// Route::get('cooment/{id}', 'CommentController@show');
Route::resource('comment', 'CommentController');
