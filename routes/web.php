<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Auth::routes();
if (!env('ALLOW_REGISTRATION', false)) {
    Route::any('/register', function() {
        abort(403);
    });
}

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/profil', 'HomeController@profil')->name('home.profil');
Route::get('/profil/edit', 'HomeController@profil_edit')->name('home.profil_edit');
Route::put('/profil/edit', 'HomeController@profil_update')->name('home.profil_update');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/gejala/search', 'GejalaController@search')->name('gejala.search');
    Route::resource('/gejala', 'GejalaController', ['except' => 'show']);

    Route::get('/kerusakan/search', 'KerusakanController@search')->name('kerusakan.search');
    Route::resource('/kerusakan', 'KerusakanController', ['except' => 'show']);

    Route::get('/solusi/search', 'SolusiController@search')->name('solusi.search');
    Route::resource('/solusi', 'SolusiController', ['except' => 'show']);
});
