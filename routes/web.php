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
Route::get('/outerwear', 'webpageController@outerwear');
Route::get('/group/{stockgroup_id}', 'webpageController@groupProduct');
Route::get('/terms-condition', 'webpageController@termsCondition');
Route::get('/privacy-policy', 'webpageController@privacyPolicy');
Route::get('/size-chart', 'webpageController@sizeChart');
Route::post('/subscription/new', 'webpageController@addSubscription');
Route::post('/send-message', 'webpageController@sendMessage');
Route::get('/cart', 'webpageController@cart');
Route::get('/payment', 'webpageController@payment');

// Advanced
Route::get('/products/{itemgroup_id}', 'webpageController@getItemFromItemGroup');
Route::get('/products/{itemgroup_id}/{id}', 'webpageController@getItemDetailsFromItemGroup');
Route::get('/products/{stockgroup_id}/{id}', 'webpageController@getItemDetailsFromStockGroup');
Route::get('/add-card/{id}', 'webpageController@addToCart');
Route::post('/checkout', 'webpageController@checkout');
Route::delete('remove-from-cart', 'webpageController@removeitem');
