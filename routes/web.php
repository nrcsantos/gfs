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

Route::get('/', function () {
    return view('test');
});

Auth::routes();


Route::prefix('/')->group(function () {
    Route::get('rates', 'PagesController@rates')->name('pages.rates');
    Route::get('rules', 'PagesController@rules')->name('pages.rules');
    Route::get('contacts', 'PagesController@contacts')->name('pages.contacts');
});

Route::get('auth', 'AuthController@redirectToProvider');
Route::get('auth/callback', 'AuthController@handleProviderCallback');
Route::get('auth/logout', 'AuthController@logout')->name('auth.logout');

//deals
Route::prefix('/deals')->group(function () {
    Route::get('/', 'DealController@index')->name('deals.index');
    Route::post('/', 'DealController@create')->name('deals.create');

});


Route::get('debug', function () {
    return view('debug.debug');
})->name('debug');
