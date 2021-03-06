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

Route::get('/', 'App\Http\Controllers\MainController@main')->name('lk');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/cabinet', 'App\Http\Controllers\MainController@cabinet');

Route::post('/cabinet/lk', 'App\Http\Controllers\MainController@cabinet_lk');
