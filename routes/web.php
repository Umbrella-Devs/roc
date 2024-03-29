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

//Route::get('/{any}', 'SpaController@index')->where('any', '.*');

Route::get('/', 'PagesController@index')->name('home');
Route::get('/programs', 'PagesController@activities')->name('activities');
Route::get('/projects', 'PagesController@projects')->name('projects');
Route::get('/about', 'PagesController@about_us')->name('about_us');
Route::get('/join-us', 'PagesController@join_us')->name('join_us');
Route::get('/donate', 'PagesController@donate')->name('donate');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');

// blog's routes 

Route::get('/blog', 'PostsController@index')->name('blog');
Route::get('/post/{id}', 'PostsController@show')->name('post.view');

// store route keep it in your mind


Route::post('/', 'RocController@bird_store')->name('bird');
Route::post('/join-us', 'RocController@join_store')->name('join');
Route::post('/donate', 'RocController@donate_store')->name('donate');
Route::post('/message', 'RocController@message')->name('message');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
