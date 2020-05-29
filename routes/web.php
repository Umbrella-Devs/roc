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
Route::get('/activities', 'PagesController@activities')->name('activities');
Route::get('/projects', 'PagesController@projects')->name('projects');
Route::get('/about', 'PagesController@about_us')->name('about_us');
Route::get('/join', 'PagesController@join_us')->name('join_us');
Route::get('/donate', 'PagesController@donate')->name('donate');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
