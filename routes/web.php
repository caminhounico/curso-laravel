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
    return redirect()->route('users.index');
});
Route::get('/home', function () {
    return redirect()->route('users.index');
});


Route::group(['prefix' => 'users', 'middleware' => 'auth'], function () {
    Route::get('/', 'UsersController@index')->name('users.index');
    Route::get('/novo', 'UsersController@create')->name('users.create');
    Route::post('/novo', 'UsersController@store')->name('users.store');
    Route::get('/editar/{id?}', 'UsersController@edit')->name('users.edit');
    Route::post('/editar/{id}', 'UsersController@update')->name('users.update');
    Route::get('/deletar/{id?}', 'UsersController@delete')->name('users.delete');
});


Auth::routes();


