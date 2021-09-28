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

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return redirect('/');
});
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return redirect('/');
});
Route::get('/optimize-clear', function () {
    $exitCode = Artisan::call('optimize:clear');
    return redirect('/');
});
Route::get('/clear-view', function () {
    $exitCode = Artisan::call('view:clear');
    return redirect('/');
});

// Social Media Redirect
Route::get('/facebook', function () {
    return Redirect::to('https://facebook.com/');
});
Route::get('/instagram', function () {
    return Redirect::to('https://www.instagram.com/');
});
Route::get('/youtube', function () {
    return Redirect::to('https://www.youtube.com/c/');
});
Route::get('/wikipedia', function () {
    return Redirect::to('https://id.wikipedia.org/wiki/Pengguna:');
});

Route::get('/', 'webpageController@index');
Route::get('/store', 'webpageController@store');
Route::get('/products', 'webpageController@products');
Route::get('/contact-us', 'webpageController@contactUs');
Route::get('/about-us', 'webpageController@aboutUs');
