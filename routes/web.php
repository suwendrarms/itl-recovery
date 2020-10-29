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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permission', 'PermissionController@index')->name('user.permission');
Route::post('/permission-store', 'PermissionController@store')->name('permissions.store');
Route::get('/delete-permission/{id}', 'PermissionController@destroy')->name('permissions.destroy');
Route::get('/edit-permission/{id}', 'PermissionController@edit')->name('permissions.edit');

