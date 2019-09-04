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
Route::get('/debugger', function () {
    return view('admin.login');
});

Route::get('/', 'PagesController@getHomePage');
Route::get('/team', 'PagesController@getTeamPage');
Route::get('/gallery', 'PagesController@getGalleryPage');
Route::get('/achievement', 'PagesController@getAchievementPage');
Route::get('/contact', 'PagesController@getContactPage');
Route::get('/oprec', 'PagesController@getOprecPage');

Route::get('/qualification/robocup-2019', 'PagesController@getRobocup2019Page');

Route::post('/contact', 'MessageController@store')->name('message.store');
Route::post('/oprec', 'OprecController@store')->name('oprec.store');

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

        //Message
        Route::get('/message', 'MessageController@index');
        Route::get('/message/create', 'MessageController@create')->name('message.create');
        Route::put('/message/edit', 'MessageController@update')->name('message.update');
        Route::delete('/message/delete', 'MessageController@delete')->name('message.delete');

        Route::get('/oprec', 'OprecController@index');

        //Gallery
        Route::get('/gallery', 'GalleryController@index');
        Route::get('/gallery/show/{id}', 'GalleryController@getGallery');
        Route::post('/gallery', 'GalleryController@store')->name('gallery.store');
        Route::put('/gallery/edit', 'GalleryController@update')->name('gallery.update');
        Route::delete('/gallery/delete', 'GalleryController@delete')->name('gallery.delete');

        //Event
        Route::get('/event', 'EventController@index');
        Route::get('/event/show/{id}', 'EventController@getEvent');
        Route::get('/event/create', 'EventController@create')->name('event.create');
        Route::post('/event/create', 'EventController@store')->name('event.store');
        Route::put('/event/edit', 'EventController@update')->name('event.update');
        Route::delete('/event/delete', 'EventController@delete')->name('event.delete');

        //Slider
        Route::get('/slider', 'SliderController@index');
        Route::get('/slider/create', 'SliderController@create')->name('slider.create');
        Route::post('/slider/create', 'SliderController@store')->name('slider.store');
        Route::put('/slider/edit', 'SliderController@update')->name('slider.update');
        Route::delete('/slider/delete', 'SliderController@delete')->name('slider.delete');
    });
});
