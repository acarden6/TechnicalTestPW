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


Route::get('/', 'HomeController@index')->name("home.index");
Route::get('/approval', 'HomeController@show')->name("home.register");
Route::get('approval/download/{file}' , 'HomeController@downloadFile')->name("file.download");


