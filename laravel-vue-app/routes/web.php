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
Route::middleware(['auth'])->group(function(){
    Route::get('/','PostController@index');
    Route::post('post','PostController@create');

    Route::middleware(['can:update,user'])->group(function () {
        Route::get('user/{user}/edit', 'UserController@edit')->name('user.edit');
        Route::put('user/{user}', 'UserController@update')->name('user.update');
    });
});

Auth::routes();
