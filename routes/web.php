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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
<<<<<<< Updated upstream
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about"); 
Route::get('/service', 'App\Http\Controllers\HomeController@service')->name("home.service"); 
=======
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
>>>>>>> Stashed changes
