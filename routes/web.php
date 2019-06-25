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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group([
    'prefix' => 'admin',
], function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::group([
        'prefix' => 'anak-asuh',
        'as' => 'anak-asuh'
    ], function () {
        Route::get('/', 'AnakAsuhController@index');
        Route::post('/', 'AnakAsuhController@store')->name('.store');
        Route::get('/create', 'AnakAsuhController@create')->name('.create');
        Route::get('/{id}', 'AnakAsuhController@edit')->name('.edit');
        Route::put('/{id}', 'AnakAsuhController@update')->name('.update');
        Route::delete('/{id}', 'AnakAsuhController@destroy')->name('.destroy');
    });
    Route::group([
        'prefix' => 'donatur',
        'as' => 'donatur'
    ], function () {
        Route::get('/', function () {
            return view('welcome');
        });
    });
});
