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

Route::get('/', 'PagesController@getHomePage');
Route::get('/team', 'PagesController@getTeamPage');
Route::get('/gallery', 'PagesController@getGalleryPage');
Route::get('/contact', 'PagesController@getContactPage');
Route::get('/achievement', 'PagesController@getAchievementPage');
