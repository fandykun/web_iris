<?php

use App\Http\Controllers\PagesController;

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
Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/team', 'PagesController@team');
Route::get('/achievement', 'PagesController@achievement');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/qualification', 'PagesController@qualification');
Route::get('/contact', 'PagesController@contact');

// Route::resource('gallery', 'GalleryController');
// Route::resource('team', 'TeamController');
