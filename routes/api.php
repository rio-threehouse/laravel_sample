<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/comment', "API\CommentController@index");
// Route::get('/comment/{id}', "API\CommentController@show");
// Route::store('/comment', "API\CommentController@store");

Route::apiResource('comment','API\CommentController');
