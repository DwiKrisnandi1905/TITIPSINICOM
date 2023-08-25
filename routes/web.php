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
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about"); 
Route::get('/service', 'App\Http\Controllers\HomeController@service')->name("home.service"); 
Route::get('/faq', 'App\Http\Controllers\HomeController@faq')->name("home.faq");
Route::get('/syaratketentuan', 'App\Http\Controllers\HomeController@syaratketentuan')->name("home.syaratketentuan");
Route::get('/privacypolicy', 'App\Http\Controllers\HomeController@privacypolicy')->name("home.privacypolicy");

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name("contact.index");


