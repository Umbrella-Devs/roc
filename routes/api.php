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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/birds', 'ApiController@bird')->name('bird.api');
Route::get('/projects', 'ApiController@project')->name('project.api');
Route::get('/gallery', 'ApiController@gallery')->name('gallery.api');
Route::get('/posts', 'ApiController@gallery')->name('gallery.api');
