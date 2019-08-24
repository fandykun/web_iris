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
Route::get('/achievement', 'PagesController@getAchievementPage');
Route::get('/contact', 'PagesController@getContactPage');

Route::get('/qualification/robocup-2019', 'PagesController@getRobocup2019Page');

Route::prefix('/admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', 'AdminController@getDashboardPage');

        //Member
        Route::get('/member', 'MemberController@index');
        Route::get('/member/create', 'MemberController@create')->name('member.create');
        Route::post('/member/create', 'MemberController@store')->name('member.store');
        Route::put('/member/edit', 'MemberController@update')->name('member.update');
        Route::delete('/member/delete', 'MemberController@delete')->name('member.delete');
    });
});
