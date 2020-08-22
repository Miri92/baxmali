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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Front\channelController@index')->name('channel.index');

Route::namespace('Front')->prefix('/channel')->group(function () {
    Route::post('/create', 'channelController@store')->name('channel.store');
    Route::get('/show/{id}', 'channelController@show')->name('channel.show');

});
